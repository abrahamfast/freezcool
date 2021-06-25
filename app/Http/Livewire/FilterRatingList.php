<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Compare\Row\Product;
use Livewire\Component;
use DB;

class FilterRatingList extends Component
{
    public $rating;
    public function mount()
    {
        $this->rating = DB::table('product')->groupBy('rating')->orderBy('rating', 'DESC')->get(['rating', DB::raw('COUNT(id) as count')]);
    }
    public function render()
    {
        return view('livewire.filter-rating-list');
    }
}
