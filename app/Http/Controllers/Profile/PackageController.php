<?php


namespace App\Http\Controllers\Profile;


use App\Http\Controllers\Controller;
use App\Models\QuoteItem;
use App\Traits\QuoteCalculator;
use App\Traits\QuoteHandler;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    use QuoteHandler;
    use QuoteCalculator;

    public function create(Request $request)
    {
        $quote = $this->getCurrentQuote();

        return view('pages.profile.package', [
            'quote' => $quote
        ]);
    }

    public function store(Request $request)
    {
        $quote = $this->getCurrentQuote();
        $this->quote = $quote;
        $producIds = $request->except('_token');
        $ids = array_keys($producIds);
        foreach ($ids as $id) {
            $item = QuoteItem::find($ids[0]);
            $pricing_factor = $producIds[$id];
             $item->amount = $item->amount - ($item->amount *  $pricing_factor) / 100;
             $item->discount = $pricing_factor + $item->discount;
             $item->save();
        }

        $this->performs();

        return view('pages.profile.package', [
            'quote' => $quote
        ]);
    }

}
