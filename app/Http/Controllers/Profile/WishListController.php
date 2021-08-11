<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function index(Request $request)
    {
        $wishlist = $request->user()->wish()->get();

        return view('pages.profile.wishlist', [
            'wishlist' => $wishlist
        ]);
    }

    public function link($id, Request $request)
    {
        $hasWish = Wishlist::where([
            'account_id' => $request->user()->id,
            'product_id' => $id
        ])->first();

        if ($hasWish) {
            $hasWish->delete();
        } else {
            Wishlist::create([
                'account_id' => $request->user()->id,
                'product_id' => $id
            ]);
        }

        return redirect()->back();
    }
}
