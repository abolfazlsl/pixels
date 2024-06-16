<?php

namespace Database\Factories;

use App\Models\employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->jobTitle,
            'salary' => fake()->randomElement(['50,000 USD' , '80,000 USD' , '120,000 USD']),
            'location' => fake()->randomElement(['Remote' , fake()->address]),
            'time' => fake()->randomElement(['Full Time', 'Part Time']),
            'url' => fake()->url,
            'special' => fake()->randomElement([false,true]),
            'employer_id' => employer::factory()
        ];
    }
}
