<?php

namespace Database\Factories;

use App\Enums\LoanStatus;
use App\Enums\PersonPosition;
use App\Models\Loan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loan>
 */
class LoanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Loan::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'object_name' => $this->faker->sentence(),
            'person_name' => $this->faker->name(),
            'person_position' => $this->faker->randomElement([
                PersonPosition::teacher->value, PersonPosition::employee->value, PersonPosition::student->value
                ]),
            'person_identify' => $this->faker->numerify('################'),
            'status' => $this->faker->randomElement([LoanStatus::onUsing->value, LoanStatus::repay->value]),
            'text' => $this->faker->text()
        ];
    }
}
