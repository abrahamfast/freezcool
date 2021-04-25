<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WeblogController extends Controller
{
    public function index()
    {
    	return view('pages.weblog.index');
    }

    public function show($slug = null)
    {
    	return view('pages.weblog.show');
    }
}
