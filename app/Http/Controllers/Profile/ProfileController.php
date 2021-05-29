<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $user = $request->user();
    	return view('pages.profile.edit-profile', [
            'user' => $user
        ]);
    }

    public function store(Request $reqeust)
    {
        $reqeust->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = $reqeust->user();
        $user->email = $reqeust->get('email');
        $user->name = $reqeust->get('name');
        $user->save();
        
        return redirect()->back();
    }
}
