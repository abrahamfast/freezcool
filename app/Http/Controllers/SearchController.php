<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $products = Product::where('names', 'LIKE', "%{$request->get('query')}%")->get();

        return view('pages.search', [
            'products' => $products
        ]);

    }
}
