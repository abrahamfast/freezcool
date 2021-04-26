<?php

namespace App\Http\Livewire\Compare\Row;

use Livewire\Component;

class Custom extends Component
{
	public array $products = [];
	
    public function render()
    {
        return view('livewire.compare.row.custom');
    }
}
