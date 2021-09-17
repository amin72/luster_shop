<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'لوستر چوبی',
            'slug' => 'لوستر-چوبی',
            'published' => true,
            'menu_category_id' => 1
        ]);

        Category::create([
            'name' => 'لوستر برنزی',
            'slug' => 'لوستر-برنزی',
            'published' => true,
            'menu_category_id' => 1
        ]);

        Category::create([
            'name' => 'لوستر فلزی',
            'slug' => 'لوستر-فلزی',
            'published' => true,
            'menu_category_id' => 1
        ]);

        Category::create([
            'name' => 'لوستر ترکیبی',
            'slug' => 'لوستر-ترکیبی',
            'published' => true,
            'menu_category_id' => 1
        ]);

        Category::create([
            'name' => 'آباژور ایستاده',
            'slug' => 'آباژور-ایستاده',
            'published' => true,
            'menu_category_id' => 2
        ]);

        Category::create([
            'name' => 'آباژور دیواری',
            'slug' => 'آباژور-دیواری',
            'published' => true,
            'menu_category_id' => 2
        ]);

        Category::create([
            'name' => 'ساعت دیواری',
            'slug' => 'ساعت-دیواری',
            'published' => true,
            'menu_category_id' => 3
        ]);

        Category::create([
            'name' => 'ساعت رومیزی',
            'slug' => 'ساعت-رومیزی',
            'published' => true,
            'menu_category_id' => 3
        ]);

        Category::create([
            'name' => 'ساعت مچی',
            'slug' => 'ساعت-مچی',
            'published' => true,
            'menu_category_id' => 3
        ]);
    }
}
