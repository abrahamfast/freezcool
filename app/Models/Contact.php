<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'modified_at';

    public $incrementing = false;

    protected $table = 'contact';
    protected $casts = [
        'id' => 'string',
    ];

    protected $guarded = [];

    public function fullName()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
