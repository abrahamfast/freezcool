<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProductCategories;

class FilterCategoriesList extends Component
{
    public $cates;

    public function mount()
    {
        $this->cates = ProductCategories::where('deleted', 0)->get();
    }
    public function render()
    {
        return view('livewire.filter-categories-list');
    }
}
