<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopProduct extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = [
        'product_id',
        'position',
        'is_active',
    ];


    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class);
    }
}
