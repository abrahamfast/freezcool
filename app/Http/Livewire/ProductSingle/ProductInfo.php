<?php

namespace App\Http\Livewire\ProductSingle;

use App\Models\Product;
use Livewire\Component;

class ProductInfo extends Component
{
    public $product;
    public $wishlist = [];

    public function mount()
    {
        $user = \Auth::user();
        if ($user) {
            $this->wishlist = $user->wish()->pluck('product_id')->toArray();
        }
    }
    public function render()
    {
        return view('livewire.product-single.product-info');
    }
}
