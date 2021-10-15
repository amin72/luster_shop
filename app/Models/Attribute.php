<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = ['name'];


    public function products() {
        return $this->belongsToMany(\App\Models\Product::class,
            // 'attribute_product', 'attribute_id', 'product_id'
        );
    }
}
