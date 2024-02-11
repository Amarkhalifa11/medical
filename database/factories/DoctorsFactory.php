<?php

namespace Database\Factories;
use App\Models\Department;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctors>
 */
class DoctorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'        => fake()->name(),
            'image'       => fake()->image(),
            'desc'        => fake()->text(),
            'twitter'     => fake()->url(),
            'instagram'   => fake()->url(),
            'linkiden'    => fake()->url(),
            'facebook'    => fake()->url(),            
            'department_id'     => fake()->randomElement(Department::pluck('id')),

        ];
    }
}
