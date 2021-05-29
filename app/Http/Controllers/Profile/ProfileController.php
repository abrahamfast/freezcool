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
        $user->phone = $reqeust->get('phone');
        $user->shipping_address_country = $reqeust->get('shipping_address_country');
        $user->shipping_address_city = $reqeust->get('shipping_address_city');
        $user->shipping_address_state = $reqeust->get('shipping_address_state');
        $user->shipping_address_street = $reqeust->get('shipping_address_street');
        $user->shipping_address_postal_code = $reqeust->get('shipping_address_postal_code');
        $user->save();
        
        return redirect()->back();
    }
}
