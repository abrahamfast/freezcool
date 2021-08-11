<?php

namespace App\Http\Livewire\Product;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Product;
use App\Models\ProductCategories;

class Lists extends Component
{
    public $products;
    public $category;
    public $cate;
    public $wishlist = [];

    public function mount()
    {
        $user = Auth::user();
        if ($user) {
            $this->wishlist = $user->wish()->pluck('product_id')->toArray();
        }

        if ($this->cate) {
            $category = ProductCategories::find($this->cate);
            $this->products = $category->products;
            $this->category = $category;
            return true;
        }

        // get all product has available
        $this->products = Product::where([
            'deleted' => 0,
            'status' => 'Available'
        ])->get();
    }

    public function render()
    {
        return view('livewire.product.lists');
    }
}
