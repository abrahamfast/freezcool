<?php

namespace App\Listeners;

use App\Events\UpdateRatingAfterSaveComment;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class UpdateProductRatting
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UpdateRatingAfterSaveComment  $event
     * @return void
     */
    public function handle(UpdateRatingAfterSaveComment $event)
    {
        $result = DB::table('product_comment')->select(DB::raw("ROUND(AVG(review_stars),1)"))
            ->where('product_id', $event->productId)
            ->pluck('ROUND(AVG(review_stars),1)');

        $product = Product::find($event->productId);
        $product->rating = $result[0];
        $product->save();
    }
}
