<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $quotes = auth()->user()->quote()->get();


        return view('pages.profile.order', [
            'quotes' => $quotes
        ]);
    }

    public function show($id = null)
    {
        $quote = Quote::find($id);
        return view('pages.profile.order-detail', [
            'quote' => $quote
        ]);
    }
}
