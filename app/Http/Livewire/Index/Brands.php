<?php

namespace App\Http\Livewire\Index;

use Livewire\Component;
use App\Models\Brand;


class Brands extends Component
{
    public $brands;

    public function mount()
    {
        $this->brands = Brand::where('deleted', 0)->limit(6)->get();
    }
    public function render()
    {
        return view('livewire.index.brands');
    }
}
