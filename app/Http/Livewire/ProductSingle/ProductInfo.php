<?php

namespace App\Http\Livewire\ProductSingle;

use App\Models\Product;
use Livewire\Component;

class ProductInfo extends Component
{
    public Product $product;

    public function render()
    {
        return view('livewire.product-single.product-info');
    }
}
