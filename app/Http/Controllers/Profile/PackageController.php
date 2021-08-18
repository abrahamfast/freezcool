<?php


namespace App\Http\Controllers\Profile;


use App\Http\Controllers\Controller;
use App\Traits\QuoteCalculator;
use App\Traits\QuoteHandler;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    use QuoteHandler;
    use QuoteCalculator;

    public function create(Request $request)
    {
        dd($this->getCurrentQuote());
    }

}
