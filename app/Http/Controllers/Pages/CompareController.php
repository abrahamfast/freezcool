<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CompareController extends Controller
{
    public function index(Request $request)
    {
        $list = session()->get('compare');
        return view('pages.compare', [
            'products' => $list
        ]);
    }

    public function add($id)
    {

        $list = session()->get('compare');

        if ($list && count($list) <= 5) {
            foreach ($list as $item) {
                if($item->id != $id) $list[] = Product::find($id);
            }
            session()->put('compare', $list);
        } else {
            $list[] = Product::find($id);  
            session()->put('compare', $list);
        }
        
        return redirect()->back();
    }
}
