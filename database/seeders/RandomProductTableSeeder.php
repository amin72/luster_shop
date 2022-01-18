<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\RandomProduct;


class RandomProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 30; ++$i) {
            RandomProduct::create([
                'product_id' => $i,
                'position' => $i,
                'is_active' => true
            ]);
        }
    }
}
