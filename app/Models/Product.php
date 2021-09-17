<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Variation;
// use App\Models\VariationValue;


class Product extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'price', 'stock', 'image', 'published'];


    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }


    public function similar_products($num=4)
    {
        return Product::where('id', '<>', $this->id)
            ->where('category_id', $this->category_id)
            ->take($num)->get();
    }
}
