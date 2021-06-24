<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'modified_at';

    protected $table = 'product_comment';

    public $incrementing = false;

    protected $guarded = [];

    protected $casts = [
        'id' => 'string',
        'account_id' => 'string',
        'product_id' => 'string'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'account_id');
    }

}
