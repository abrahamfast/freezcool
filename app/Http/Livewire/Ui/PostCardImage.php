<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;

class PostCardImage extends Component
{
	public string $url;
	public string $title = '';
	public string $src;

    public function render()
    {
        return view('livewire.ui.post-card-image');
    }
}
