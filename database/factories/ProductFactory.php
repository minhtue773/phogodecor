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
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->paragraph(2),
            'price' => fake()->numberBetween(800000, 8000000),
            'discount_price' => fake()->randomElement([5,10,15]),
            'stock' => fake()->numberBetween(20, 99),
            'image' => fake()->imageUrl(640 ,480, 'product')
        ];
    }
}
