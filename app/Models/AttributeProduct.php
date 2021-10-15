<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Models\Attribute;
use App\Models\Product;


class AttributeProduct extends Pivot
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = ['attribute_id', 'product_id', 'value'];


    public function attribute(){
        return $this->hasOne(\App\Models\Attribute::class, 'id', 'attribute_id');
    }

    public function product(){
        return $this->hasOne(\App\Models\Product::class, 'id', 'product_id');
    }
}
