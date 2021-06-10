<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\{Product,ProductCategories};

class Lists extends Component
{
    public $products;
    public $category;
    public $cate;

    public function mount()
    {
        // get product by cat
        if($this->cate){
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
