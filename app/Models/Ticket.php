<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'modified_at';

    protected $table = 'contact_form';
    protected $casts = [
        'id' => 'string'
    ];
    protected $guarded = [];

    public $incrementing = false;
    public $timestamps = false;
}
