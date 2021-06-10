<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProductCategories;

class HeaderNavbarDepartments extends Component
{

    public $categories;

    public function mount()
    {
        $this->categories = ProductCategories::where('deleted', 0)->get();
    }
    public function render()
    {
        return view('livewire.header-navbar-departments');
    }
}
