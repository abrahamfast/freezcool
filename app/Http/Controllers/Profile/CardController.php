<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;


class CardController extends Controller
{
    public function index()
    {
    	return view('pages.card');
    }
}
