<?php

namespace Database\Factories;

use App\Models\Building;
use App\Models\Classroom;
use ClassroomTypeEnum as Type;
use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Classroom::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $building=Building::all()->random();
        return [
            'name' => $this->faker->safeColorName(),
            'type' => $this->faker->randomElement([Type::room, Type::site, Type::lab]),
            'building_id' => $building->id,
            'building_name' => $building->name,
            'classroom_number' => rand(1, 40)
        ];
    }
}
