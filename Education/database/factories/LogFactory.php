<?php

namespace Database\Factories;

use App\Models\Log;
use App\Models\User;
use App\Enums\LogActionEnum as Action;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Log>
 */
class LogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Log::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::all()->random();
        return [
            'user_id' => $user->id,
            'user_name' => $user->name,
            'action' => $this->faker->randomElement([
                Action::insert->value, Action::login->value, Action::update->value,
                Action::delete->value, Action::logout->value
            ]),
            'action_on' => User::all()->random()->name,
            'dsc' => $this->faker->text(35)
        ];
    }
}
