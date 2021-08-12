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
        $filter['brands'] = false;
        $filter['rating'] = false;

        if ($request->get('brands')) {
            $filter['brands'] = explode(",", $request->get('brands'));
        }

        if ($request->get('rating')) {
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
