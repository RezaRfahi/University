<?php

namespace Database\Factories;

use Faker\Provider\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'phone_number' => PhoneNumber::numerify('###########'),
            'email' => $this->faker->unique()->safeEmail()
        ];
    }
}
