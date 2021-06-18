<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Rating extends Component
{
    public $rating = 4;
    public function render()
    {
        return view('livewire.rating');
    }
}
