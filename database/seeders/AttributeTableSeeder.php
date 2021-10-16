<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attribute_names = [
            'رنگ', 'وزن', 'سایز', 'اندازه', 'طول', 'عرض', 'ارتقاع'
        ];

        foreach($attribute_names as $name) {
            \App\Models\Attribute::create([
                'name' => $name
            ]);
        }
    }
}
