<?php

namespace Database\Factories;

use App\Models\AttributeProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttributeProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AttributeProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'attribute_id' => \App\Models\Attribute::all()->random(),
            'product_id' => \App\Models\Product::all()->random(),
            'value' => $this->faker->word,
            'price' => $this->faker->numberBetween(10000, 500000)
        ];
    }
}
