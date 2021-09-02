<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->word . ' ' . $this->faker->randomDigit . $this->faker->randomDigit;
        $slug = \Str::slug($name, '-');

        return [
            'category_id' => function() {
                return Category::where('id', '>', 3)->get()->random();
            },
            'name' => $name,
            'slug' => $slug,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(100000, 1000000),
            'stock' => $this->faker->randomDigit,
            'published' => true,
            'image' => 'images/products/sample.jpg',
            'small_image' => 'images/products/sample_small.jpg',
        ];
    }
}