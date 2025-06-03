<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->dateTimeBetween('-30 days', 'now'),
            'product_name' => $this->faker->word(),
            'quantity' => $this->faker->numberBetween(1, 20),
            'price_per_unit' => $this->faker->randomFloat(2, 5, 100),
            'total' => fn (array $attrs) => $attrs['quantity'] * $attrs['price_per_unit'],
        ];
    }
}
