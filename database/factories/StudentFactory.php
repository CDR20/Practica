<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'key' => $this->faker->numerify('%%%%%%%%%%'),
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'password' => bcrypt('password'),
            'group_id' => rand(1,5)
        ];
    }
}