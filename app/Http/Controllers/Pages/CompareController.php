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
        session()->forget('compare');

        if ($list == null) {
            unset($list);
            $list[] = Product::find($id);
            session()->put('compare', $list);

            session()->put('toast', __('global.Compare add to list'));

            return redirect()->back();
        }

        if ($list && count($list) <= 5) {
            foreach ($list as $item) {
                $keys[] = $item->id;
            }

            if (!in_array($id, $keys)) {
                $list[] = Product::find($id);
            }
            session()->put('compare', $list);
        }

        session()->put('toast', __('global.Compare add to list'));

        return redirect()->back();
    }

    public function delete($id)
    {
        $list = session()->get('compare');
        session()->forget('compare');

        foreach ($list as $product) {
            if ($product->id !== $id) {
                session()->push('compare', $product);
            }
        }

        session()->put('toast', __('global.Compare remove from list'));

        return redirect()->back();
    }
}
