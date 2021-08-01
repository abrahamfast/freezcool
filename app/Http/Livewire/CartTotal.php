<?php

namespace App\Http\Livewire;

use App\Models\Quote;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartTotal extends Component
{
    public function mount()
    {
        $user = Auth::user();
        $quoteId = session()->get('quoteId');

        if($user && !$quoteId){
            $quote = $user->quote()->where('status', 'Draft')->where('deleted', 0)->first();
            if(!$quote) return false;
            $haveTeam = $quote->team()->count();
            if($quote && !$haveTeam){
                $this->quote = $quote;
                $this->quote_items = $this->quote->items()->where('deleted', 0)->get();
                $this->itemsCount  = $this->quote_items->count();
            }
        } else {
            $quoteId = session()->get('quoteId');
            if($quoteId){
                $quote = Quote::where('id', $quoteId)->first();
                if(!$quote) return false;
                $haveTeam = $quote->team()->count();
                if($quote && !$haveTeam){
                    $this->quote = $quote;
                    $this->quote_items = $this->quote->items()->where('deleted', 0)->get();
                    $this->itemsCount  = $this->quote_items->count();
                    $this->total_amount = $this->quote->amount;
                }
            }
        }

        if($this->quote){
            $this->amount =  $this->quote->grand_total_amount;
            $this->discount_amount = $this->quote->grand_total_amount;
            $this->tax_amount = $this->quote->tax_amount;
            $this->shipping_cost = $this->quote->shipping_cost;
            $this->total_amount = $this->quote->amount;
        }
    }

    public function render()
    {
        return view('livewire.cart-total');
    }
}
