<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Product;


class MenuCategory extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = ['name', 'slug', 'published'];


    public function categories()
    {
        return $this->hasMany(Category::class);
    }


    public function products()
    {
        return $this->hasManyThrough(Product::class, Category::class);
    }
}
