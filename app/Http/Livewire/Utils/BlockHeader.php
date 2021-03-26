<?php

namespace App\Http\Livewire\Utils;

use Livewire\Component;

class BlockHeader extends Component
{
    public $title = '';
    public function mounted($title)
    {
        $this->title = $title;
    }
    public function render()
    {
        return view('livewire.utils.block-header');
    }
}
