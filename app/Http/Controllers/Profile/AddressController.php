<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        return view('pages.profile.addresses');
    }

    public function create()
    {
        return view('pages.profile.addresses-create');
    }
}
