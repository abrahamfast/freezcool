<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
    	$user = $request->user();

    	return view('pages.profile.dashboard', [
    		'user' => $user
    	]);
    }
}
