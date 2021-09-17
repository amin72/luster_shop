<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuCategory;


class MenuCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuCategory::create([
            'name' => 'لوستر',
            'slug' => 'لوستر',
            'published' => true
        ]);

        MenuCategory::create([
            'name' => 'آباژور',
            'slug' => 'آباژور',
            'published' => true
        ]);

        MenuCategory::create([
            'name' => 'ساعت',
            'slug' => 'ساعت',
            'published' => true
        ]);
    }
}
