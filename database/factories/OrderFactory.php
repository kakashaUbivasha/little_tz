<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_number'=>$this->faker->unique()->randomNumber(),
            'date' => $this->faker->dateTimeBetween('-30 days', 'now'),
            'customer_name' => $this->faker->name(),
            'status' => $this->faker->randomElement(['pending', 'completed', 'cancelled']),
            'total_amount' => $this->faker->randomFloat(2, 100, 1000),
        ];
    }
}
