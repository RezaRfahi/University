<?php

namespace Database\Factories;

use App\Models\ClassDate;
use App\Models\Classroom;
use App\Models\Course;
use App\Enums\ClassDateCircumstanceEnum as Circumstance;
use App\Enums\ClassDateStatusEnum as Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClassDate>
 */
class ClassDateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClassDate::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $course=Course::all()->random();
        $classroom = Classroom::all()->random();
        return [
            'classroom_id' => $classroom->id,
            'classroom_name' => $classroom->name,
            'course_id' => $course->id,
            'course_name' => $course->name,
            'teacher_name' => $course->teacher->name,
            'date' => $this->faker->date(),
            'time' => $this->faker->time('H:i'),
            'status' => $this->faker->randomElement([Status::no_run_time, Status::running, Status::finished]),
            'circumstance' => $this->faker->randomElement([Circumstance::intuitive, Circumstance::e_learning])
        ];
    }
}
