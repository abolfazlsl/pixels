<?php

namespace Database\Factories;

use App\Models\employer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company,
            'logo' => 'https://picsum.photos/id/'.rand(0,999).'/90/90',
//            'logo' => fake()->image(['90','90']),
            'user_id' => User::factory()
        ];
    }
}
