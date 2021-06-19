<?php

namespace App\Http\Livewire\ProductSingle;

use Livewire\Component;
use App\Models\Product;

class ProductTabs extends Component
{
    public Product $product;

    public function render()
    {
        return view('livewire.product-single.product-tabs');
    }
}
