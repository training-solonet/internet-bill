<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bill>
 */
class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'package' => fake()->word(),
            'month' => fake()->monthName(),
            'price' => fake()->numberBetween(99999, 300001),
            'regist_number' => User::inRandomOrder()->first()->regist_number,
            'deadline' => fake()->date('d/m/Y'),
            'status' => fake()->randomElement(['Paid', 'Unpaid'])
        ];
    }
}
