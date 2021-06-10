<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index($id = null)
    {
        return view('pages.shop-list', [
            'id' => $id
        ]);
    }

    public function show($id = null)
    {
        return view('pages.product', [
            'product' => $id
        ]);
    }
}
