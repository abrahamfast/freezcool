<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Services\OtpService;
use App\Models\User;

class LoginController extends Controller
{

    use AuthenticatesUsers;
    private OtpService $otpService;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function showLoginForm()
    {
        return view('auth.login-otp');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(OtpService $otpService)
    {
        $this->middleware('guest')->except('logout');
        $this->otpService = $otpService;
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        // send otp
        $receptor = $request->get('phone');
        $user = User::where('phone', $receptor)->first();
        // user has not registered force to register
        if(!$user) {
            return redirect()->route('register');
        }
        $reciver = 'otp:phone';
        if($request->session()->get($reciver)) {
            return redirect()->route('otp');
        }

        $this->otpService->setReceptor($receptor);
        $this->otpService->send();
        // @TODO need improve by expireation key
        session()->put($reciver, $receptor, 120);
        
        // just one time
        return redirect()->route('otp');
    }

    public function otp()
    {
        return view('auth.otp');
    }


    public function doLogin(Request $request)
    {
        $request->validate([
            'code' => 'required'
        ]);
        $phone = $request->session()->get('otp:phone');

        $verify = $this->otpService->verifyOtp($phone, $request->get('code'));


        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($verify) {
            $user = User::where('phone', $phone)->first();
            auth()->login($user);
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required'
        ]);
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'phone';
    }
}
