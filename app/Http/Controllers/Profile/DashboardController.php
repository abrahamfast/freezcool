<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        $address = $user->contact()->where('is_primary', 1)->get();
        if ($address){
            $address = $user->contact()->first();
        }

        // get all quotes
        $quotes = $user->quote();


        return view('pages.profile.dashboard', [
            'user' => $user,
            'quotes' => $quotes,
            'address' => $address
        ]);
    }
}
