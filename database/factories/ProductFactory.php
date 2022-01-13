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
        $name = $this->faker->word . ' ' . $this->faker->randomDigit . "-" . $this->faker->randomDigit . $this->faker->randomDigit;
        $slug = \Str::slug($name, '-');

        return [
            'category_id' => function() {
                return Category::all()->random();
            },
            'name' => $name,
            'slug' => $slug,
            'description' => $this->faker->text($maxNbChars=250),
            'details' => $this->faker->paragraph(30),
            'price' => round($this->faker->numberBetween(100000, 10000000) / 10000) * 10000,
            'stock' => $this->faker->randomDigit,
            'published' => true,
            'image' => 'images/products/sample.jpg',
            'small_image' => 'images/products/sample_small.jpg',
        ];
    }
}
