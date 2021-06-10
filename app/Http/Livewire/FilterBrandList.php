<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Brand;

class FilterBrandList extends Component
{
    public $brands;

    public function mount()
    {
        $this->brands = Brand::where('deleted', 0)->get();
    }
    public function render()
    {
        return view('livewire.filter-brand-list');
    }
}
