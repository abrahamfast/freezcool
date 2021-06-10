<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class Lists extends Component
{
    public $products;

    public function mount()
    {
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
