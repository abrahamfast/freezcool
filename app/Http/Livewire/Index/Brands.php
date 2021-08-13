<?php

namespace App\Http\Livewire\Index;

use Livewire\Component;

class Brands extends Component
{
    public $brands;

    public function mount()
    {
        $this->brands = Brands::where('deleted', 0)->limit(6)->get();
    }
    public function render()
    {
        return view('livewire.index.brands');
    }
}
