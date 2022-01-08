<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'phone',
        'password',
        'token',
        'token_expires_at',
        'is_active',
        'is_admin',
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
        'phone_verified_at' => 'datetime',
    ];


    public function address() {
        return $this->hasOne('App\Models\Address');
    }


    public function shopping_carts() {
        return $this->hasMany('App\Models\ShoppingCart');
    }


    public function token_expired() {
        return $this->token_expires_at < Carbon::now();
    }

    
    // checks if all required fields are set and user is is ready to purchase
    public function is_ready_to_purchase() {
        $adress = $this->address;
        return ($this->name and $adress->province and $adress->city and $adress->detail);
    }
}
