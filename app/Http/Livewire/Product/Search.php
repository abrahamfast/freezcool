<?php

namespace App\Http\Livewire\Product;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Product;
use App\Models\ProductCategories;

class Search extends Component
{
    public $products;
    public $wishlist = [];

    public function mount()
    {
        $user = Auth::user();
        if ($user) {
            $this->wishlist = $user->wish()->pluck('product_id')->toArray();
        }
    }

    public function render()
    {
        return view('livewire.product.search');
    }

}
