<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('pages.calculator');
    }

    public function show(Request $request)
    {
        return view('pages.calculator_result');
    }
}
