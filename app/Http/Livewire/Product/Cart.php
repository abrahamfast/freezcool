<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

class Cart extends Component
{
    public $product;
    public $wishlist = [];
    public $compare_list;

    public function mount()
    {
        $compare = session()->get('compare');
        $this->compare_list = collect($compare)->map(function($iten){
            return $iten->id;
        });
    }

    public function render()
    {
        return view('livewire.product.cart');
    }
}
