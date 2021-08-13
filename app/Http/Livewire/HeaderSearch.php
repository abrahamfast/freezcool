<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\ProductCategories;
use Livewire\Component;

class HeaderSearch extends Component
{
    public $popular_products;
    public $categories;

    public function mount()
    {
        $this->popular_products = Product::where('deleted', 0)->orderBy('rating', 'desc')->limit(2)->get();
        $this->categories = ProductCategories::where('deleted', 0)->limit(4)->get();
    }

    public function render()
    {
        return view('livewire.header-search');
    }
}
