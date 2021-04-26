<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
	public function getDelivery()
	{
		return view('pages.delivery-information');
	}

	public function getFaq()
	{
		return view('pages.faq');
	}
}
