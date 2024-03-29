<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Category::factory(5)->create();
        $this->call(MenuCategoryTableSeeder::class);
        $this->call(AttributeTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        \App\Models\Product::factory(50)->create();
        \App\Models\AttributeProduct::factory(500)->create();
        
        // Circles
        $this->call(CircleTableSeeder::class);

        // Top Products
        $this->call(TopProductTableSeeder::class);

        // Random Products
        $this->call(RandomProductTableSeeder::class);
    }
}
