<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Circle;


class CircleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Circle::create([
            'title' => 'لوستر برنزی',
            'image' => 'images/products/sample.jpg',
            'link' => 'http://127.0.0.1:8000/products?menu=%D9%84%D9%88%D8%B3%D8%AA%D8%B1&category=%D9%84%D9%88%D8%B3%D8%AA%D8%B1-%D8%A8%D8%B1%D9%86%D8%B2%DB%8C',
            'section' => 1,
            'is_active' => true
        ]);

        Circle::create([
            'title' => 'لوستر فلزی',
            'image' => 'images/products/sample.jpg',
            'link' => 'http://127.0.0.1:8000/products?menu=%D9%84%D9%88%D8%B3%D8%AA%D8%B1&category=%D9%84%D9%88%D8%B3%D8%AA%D8%B1-%D9%81%D9%84%D8%B2%DB%8C',
            'section' => 1,
            'is_active' => true
        ]);
        
        Circle::create([
            'title' => 'آباژور ایستاده',
            'image' => 'images/products/sample.jpg',
            'link' => 'http://127.0.0.1:8000/products?menu=%D8%A2%D8%A8%D8%A7%DA%98%D9%88%D8%B1&category=%D8%A2%D8%A8%D8%A7%DA%98%D9%88%D8%B1-%D8%A7%DB%8C%D8%B3%D8%AA%D8%A7%D8%AF%D9%87',
            'section' => 1,
            'is_active' => true
        ]);
        
        Circle::create([
            'title' => 'آباژور دیواری',
            'image' => 'images/products/sample.jpg',
            'link' => 'http://127.0.0.1:8000/products?menu=%D8%A2%D8%A8%D8%A7%DA%98%D9%88%D8%B1&category=%D8%A2%D8%A8%D8%A7%DA%98%D9%88%D8%B1-%D8%AF%DB%8C%D9%88%D8%A7%D8%B1%DB%8C',
            'section' => 1,
            'is_active' => true
        ]);
        
        Circle::create([
            'title' => 'لوستر چوبی',
            'image' => 'images/products/sample.jpg',
            'link' => 'http://127.0.0.1:8000/products?menu=%D9%84%D9%88%D8%B3%D8%AA%D8%B1&category=%D9%84%D9%88%D8%B3%D8%AA%D8%B1-%DA%86%D9%88%D8%A8%DB%8C',
            'section' => 1,
            'is_active' => true
        ]);

        Circle::create([
            'title' => 'ساعت دیواری',
            'image' => 'images/products/sample.jpg',
            'link' => 'http://127.0.0.1:8000/products?menu=%D8%B3%D8%A7%D8%B9%D8%AA&category=%D8%B3%D8%A7%D8%B9%D8%AA-%D8%AF%DB%8C%D9%88%D8%A7%D8%B1%DB%8C',
            'section' => 1,
            'is_active' => true
        ]);
    }
}
