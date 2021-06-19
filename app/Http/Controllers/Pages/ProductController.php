<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product;

class ProductController extends Controller
{
    public function index($id = null)
    {
        return view('pages.shop-list', [
            'categoryId' => $id
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
