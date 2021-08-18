<?php

namespace App\Http\Livewire;

use App\Models\Quote;
use Livewire\Component;

class MobileCartBotton extends Component
{
    public $quote_items;
    public $total_amount;

    public function mount()
    {
        $quoteId = session()->get('quoteId');
        if ($quoteId) {
            $quote = Quote::where('id', $quoteId)->first();
            if (!$quote) return;
            $this->quote_items = $quote->items()->where('deleted', 0)->count();
            $this->total_amount = $quote->amount;
        }
    }

    public function render()
    {
        return view('livewire.mobile-cart-botton');
    }
}
