<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'modified_at';

    protected $table = 'package';

    protected $guarded = [];

    public $incrementing = false;

    public $casts = [
        'id' => 'string',
        'advisor_id' => 'string'
    ];

    public function quote()
    {

    }


}
