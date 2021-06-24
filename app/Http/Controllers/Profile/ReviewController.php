<?php

namespace App\Http\Controllers\Profile;

use App\Events\UpdateRatingAfterSaveComment;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Helper\Stri;

class ReviewController extends Controller
{
    public function store($id, Request $request)
    {
        $request->validate([
            'review_stars' => 'required',
            'review_text' => 'required',
        ]);

        Comment::create([
            'id' => Stri::uuid(),
            'product_id' => $request->get('product_id'),
            'account_id' => $request->user()->id,
            'review_stars' => $request->get('review_stars'),
            'review_text' => $request->get('review_text')
        ]);

        UpdateRatingAfterSaveComment::dispatch($request->product_id);

        return redirect()->back();
    }
}
