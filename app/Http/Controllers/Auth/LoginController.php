<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Services\OtpService;

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
        $reciver = 'otp:' . $receptor;
        if($request->session()->get($reciver)) {
            return view('auth.otp');
        }

        $this->otpService->setReceptor($receptor);
        // $this->otpService->send();
        // @TODO need improve by expireation key
        session()->put($reciver, true);
        
        // just one time
        return view('auth.otp');
    }


    public function doLogin(Request $request)
    {
        // dd($request->session()->all(), $request->all(), $this->otpService->verifyOtp("09129796502", $request->get('phone')));
        $this->validateLogin($request);


        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
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
