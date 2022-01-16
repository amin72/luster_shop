<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchasedProduct extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'price',
        'quantity',
    ];


    public function cart() {
        return $this->belongsTo('App\Models\ShoppingCart');
    }


    public function product() {
        return Product::findOrFail($this->product_id);
    }
}
