<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

class Sidebar extends Component
{
    public $cate = null;

    public function render()
    {
        return view('livewire.product.sidebar');
    }
}
