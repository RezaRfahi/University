<?php

namespace Database\Factories;

use App\Enums\LoanStatusEnum;
use App\Enums\PersonPositionEnum;
use App\Models\Loan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Psy\Util\Str;

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
            'object_name' => $this->faker->word(),
            'person_name' => $this->faker->name(),
            'person_position' => Str($this->faker->randomElement([
                PersonPositionEnum::teacher->value, PersonPositionEnum::employee->value,
                PersonPositionEnum::student->value
            ])),
            'person_identify' => $this->faker->numerify('################'),
            'status' => Str($this->faker->randomElement(
                [LoanStatusEnum::onUsing->value, LoanStatusEnum::repay->value]
            )),
            'description' => $this->faker->text(50)
        ];
    }
}
