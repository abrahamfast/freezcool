<?php

namespace App\Http\Livewire\Compare;

use Livewire\Component;

class Table extends Component
{
    public $products;
    public function render()
    {
        return view('livewire.compare.table');
    }
}
