<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
    	return view('pages.profile.edit-profile');
    }

    public function getLogin()
    {
    	return view('pages.profile.login');
    }

    public function getRegister()
    {
    	return view('pages.profile.register');
    }
}
