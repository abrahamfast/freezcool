<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Quote;
use App\Models\QuoteItem;
use App\Traits\QuoteHandler;
use App\Traits\QuoteCalculator;

class CartController extends Controller
{
    use QuoteHandler;
    use QuoteCalculator;

    protected $product;
    protected $qoute;
    protected $qouteId;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $quoteId = session()->get('quoteId');

        return view('pages.cart');
    }

    public function unlink($id)
    {
        QuoteItem::where('id', $id)->delete();
        // recalculated open quote
        $this->getSessionQuote();
        $this->setQuote();
        $this->performs();

        session()->put('toast', __('global.Product remove from cart'));
        return redirect()->back();
    }

    public function link(Request $request)
    {
        $user = $request->user();
        $productId = $request->get('product-id');
        $quantity = $request->get('quantity');

        if ($this->getSessionQuote()) {
            $this->setQuote();
        } elseif ($user) {
            $this->userQuote($user);
        } else {
            $this->newQuote();
        }

        $this->product($productId);

        if ($this->checkExistsItem($productId)){
            session()->put('toast', __('global.Product add to cart'));
            return redirect()->back();
        }
        $this->addItem(
            $quantity,
            $user ? $user->account_id : ''
        );

        $this->performs();

        session()->put('toast', __('global.Product add to cart'));

        return redirect()->back();
    }


    public function final(Request $request)
    {
        $user = $request->user();
        $quoteId = $request->session()->get('quoteId');
        $quote = Quote::where('id', $quoteId)->first();
        $quote->assginSalesTeam();
        $quote->status = 'In Review';

        // @TODO remove release ver
        if (!$quote->account_id) {
            $quote->account_id = $user->account()->first()->id;
        }

        $quote->save();
        // @TODO here need reload model
        $quote->refresh();

        session()->forget('quoteId');

        return view('success', [
            'slug' => __('Order Placed'),
            'quote' => $quote,
            'user' => $user
        ]);
    }


    public function checkout()
    {
        // send payment

        return redirect()->route('checkout.final', 'id');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
