<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'total_price',
        'purchased',
    ];

    public function products() {
        return $this->belongsToMany(\App\Models\PurchasedProduct::class);
    }


    public function user() {
        return $this->belongsTo(\App\Models\User::class);
    }
}
