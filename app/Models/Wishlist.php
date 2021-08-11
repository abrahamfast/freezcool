<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = 'account_product';
    public $timestamps = false;

    protected $guarded = [];
    protected $casts = [
        'id' => 'string',
        'account_id' => 'string',
        'product_id' => 'string'
    ];

    public function product()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }
}
