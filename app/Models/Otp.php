<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    use HasFactory;
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'modified_at';

    public $incrementing = false;

    protected $table = 'otp_serivce';
    protected $guarded = [];


    protected $casts = [
        'id' => 'string'
    ];
}
