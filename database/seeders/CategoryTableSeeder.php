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
        // parent categories
        $cat1 = Category::create([
            'name' => 'لوستر',
            'slug' => 'لوستر',
            'published' => true
        ]);

        $cat2 = Category::create([
            'name' => 'آباژور',
            'slug' => 'آباژور',
            'published' => true
        ]);

        $cat3 = Category::create([
            'name' => 'ساعت',
            'slug' => 'ساعت',
            'published' => true
        ]);

        // child categories
        Category::create([
            'name' => 'لوستر چوبی',
            'slug' => 'لوستر-چوبی',
            'published' => true,
            'parent_id' => $cat1->id
        ]);

        Category::create([
            'name' => 'لوستر برنزی',
            'slug' => 'لوستر-برنزی',
            'published' => true,
            'parent_id' => $cat1->id
        ]);

        Category::create([
            'name' => 'لوستر فلزی',
            'slug' => 'لوستر-فلزی',
            'published' => true,
            'parent_id' => $cat1->id
        ]);

        Category::create([
            'name' => 'لوستر ترکیبی',
            'slug' => 'لوستر-ترکیبی',
            'published' => true,
            'parent_id' => $cat1->id
        ]);

        Category::create([
            'name' => 'آباژور ایستاده',
            'slug' => 'آباژور-ایستاده',
            'published' => true,
            'parent_id' => $cat2->id
        ]);

        Category::create([
            'name' => 'آباژور دیواری',
            'slug' => 'آباژور-دیواری',
            'published' => true,
            'parent_id' => $cat2->id
        ]);

        Category::create([
            'name' => 'ساعت دیواری',
            'slug' => 'ساعت-دیواری',
            'published' => true,
            'parent_id' => $cat3->id
        ]);

        Category::create([
            'name' => 'ساعت رومیزی',
            'slug' => 'ساعت-رومیزی',
            'published' => true,
            'parent_id' => $cat3->id
        ]);

        Category::create([
            'name' => 'ساعت مچی',
            'slug' => 'ساعت-مچی',
            'published' => true,
            'parent_id' => $cat3->id
        ]);
    }
}
