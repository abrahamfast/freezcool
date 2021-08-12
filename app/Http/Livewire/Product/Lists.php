<?php

namespace App\Http\Livewire\Product;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Product;
use App\Models\ProductCategories;

class Lists extends Component
{
    public $products;
    public $category;
    public $cate;
    public $wishlist = [];
    public $filters;

    public function mount()
    {
        $user = Auth::user();
        if ($user) {
            $this->wishlist = $user->wish()->pluck('product_id')->toArray();
        }

        if ($this->cate) {
            $category = ProductCategories::find($this->cate);
            $queryBuilder = $category->products()->where('deleted', 0);

            $queryBuilder = $this->filter($queryBuilder);



            $this->products = $queryBuilder->get();
            $this->category = $category;
            return true;
        }

        // get all product has available
        $queryBuilder = Product::where('deleted', 0);

        $queryBuilder = $this->filter($queryBuilder);


        $this->products = $queryBuilder->get();
    }

    public function render()
    {
        return view('livewire.product.lists');
    }

    private function filter($queryBuilder)
    {
        $query = false;

        if ($this->filters) {
            if ($this->filters['brands']) {
                $queryBuilder->whereIn('brand_id', $this->filters['brands']);
            }

            if ($this->filters['rating']) {
                if ($query) {
                    $query = $query->whereIn('rating', $this->filters['rating']);
                } else {
                    $query = $queryBuilder->where('rating', 5);
                }
            }
        }


        if ($query) {
            return $query;
        }


        return $queryBuilder;
    }
}
