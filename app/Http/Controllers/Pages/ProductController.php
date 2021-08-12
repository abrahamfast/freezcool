<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request, $id = null)
    {
        $filter = [];
        if ($request->all()) {
            $filter['brands'] = explode(",", $request->get('brands'));
            $filter['rating'] = explode(",", $request->get('rating'));
        }

        return view('pages.shop-list', [
            'categoryId' => $id,
            'filters' => $filter
        ]);
    }

    public function show($id)
    {
        $product = Product::findOrfail($id);

        return view('pages.product', [
            'product' => $product
        ]);
    }
}
