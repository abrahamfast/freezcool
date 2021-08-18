<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $qurey = $request->get('query');
        if ($qurey) {
            $products = Product::where('names', 'LIKE', "%{$request->get('query')}%")->where('deleted', 0)->get();
        } else {
            $products = Product::where('deleted', 0)->get();
        }



        return view('pages.search', [
            'products' => $products
        ]);

    }
}
