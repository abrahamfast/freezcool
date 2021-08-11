<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function index()
    {
    	return view('pages.profile.wishlist');
    }

    public function link($id, Request  $request)
    {
        $hasWish = Wishlist::where([
            'account_id' => $request->user()->id,
            'product_id' => $id
        ])->get();

        if($hasWish->count() == 0){
            Wishlist::create([
                'account_id' => $request->user()->id,
                'product_id' => $id
            ]);
        }


        return redirect()->back();

    }

    public function store($id)
    {
        // @TODO added whishlist
        return redirect()->back();
    }
}
