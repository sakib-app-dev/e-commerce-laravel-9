<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>fake()->sentence(3),
            'category_id'=>fake()->numberBetween(1, 3),
            'description'=>fake()->text(250),
            'price'=>fake()->randomFloat(2,200,1000),
        ];
    }
}
