<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'modified_at';

    protected $table = "account";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'phone',
        'name',
        'email',
        'account_id',
        'password',
        'shipping_address_street',
        'shipping_address_city',
        'shipping_address_state',
        'shipping_address_country',
        'shipping_address_postal_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'id' => 'string',
        'account_id' => 'string'
    ];

    public $incrementing = false;


    public function wishlist()
    {
        return $this->hasMany(Wishlist::class, 'user_frontend_id');
    }

    public function account()
    {
        return $this->hasOne(Account::class, 'id', 'account_id');
    }

    /**
     * this related between quote, user & account tables.
     * account_id is related key in both tables.
     */
    public function quote()
    {
        return $this->hasMany(Quote::class, 'account_id');
    }

    /**
     * User Wishlist
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wish()
    {
        return $this->hasMany(Wishlist::class, 'account_id');
    }

    public function isAdvisor()
    {
        return $this->adviser;
    }

    public function contact()
    {
        return $this->hasOne(Contact::class, 'account_id');
    }

    public function getFullAddress()
    {
        return $this->shipping_address_country .", ". $this->shipping_address_city .", " . $this->shipping_address_street;
    }

    /**
     * @return bool
     */
    public function isNotHaveAddress(): bool
    {
        return $this->shipping_address_street != '' ? false : true;
    }

    public function package()
    {
        return $this->belongsToMany(Package::class, 'package_account', 'account_id', 'package_id', );
    }
}
