<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\TopProduct;


class TopProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 6; ++$i) {
            TopProduct::create([
                'product_id' => $i,
                'position' => $i,
                'is_active' => true
            ]);
        }
    }
}
