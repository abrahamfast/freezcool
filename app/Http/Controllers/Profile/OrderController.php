<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
    	return view('pages.profile.order');
    }

    public function show($id = null)
    {
    	return view('pages.profile.order-detail');	
    }
}
