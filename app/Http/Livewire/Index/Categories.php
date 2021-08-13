<?php

namespace App\Http\Livewire\Index;

use App\Models\ProductCategories;
use Livewire\Component;

class Categories extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = ProductCategories::where('deleted', 0)->limit(6)->get();
    }

    public function render()
    {
        return view('livewire.index.categories');
    }
}
