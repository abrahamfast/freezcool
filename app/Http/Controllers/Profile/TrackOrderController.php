<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;

class TrackOrderController extends Controller
{
    public function index()
    {
        return view('pages.profile.track');
    }

    public function show(Request $request)
    {
        $data = $request->all();
        $quote = Quote::where('number', $data['number'])->first();

        return view('pages.track_order', [
            'quote' => $quote ?? false
        ]);
    }
}
