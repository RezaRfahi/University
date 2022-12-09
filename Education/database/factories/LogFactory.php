<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Log>
 */
class LogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'action' => $this->faker->randomElement(['login', 'logout', 'insert', 'delete', 'update']),
            'action_on' => User::all()->random()->name,
            'dsc' => $this->faker->sentences()
        ];
    }
}
