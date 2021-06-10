<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\{Product,ProductCategories};

class Lists extends Component
{
    public $products;
    public $id;
    public $category;

    public function mount()
    {
        if($this->id){
            $category = ProductCategories::find($this->id);
            $this->products = $category->products;
            $this->category = $category;
        }
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
