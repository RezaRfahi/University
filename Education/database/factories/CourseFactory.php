<?php

namespace Database\Factories;

use App\Models\Classroom;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $teacher=Teacher::all()->random();
        $time=$this->faker->time('H:i');
        return [
            'name' => $this->faker->streetName(),
            'group_code' => $this->faker->randomDigitNotZero(),
            'course_code' => $this->faker->randomDigitNotZero(),
            'classroom_id' => Classroom::all()->random()->id,
            'teacher_id' => $teacher->id,
            'teacher_name' => $teacher->name,
            'term_number' => rand(1,10),
            'units' => rand(1,4),
            'first_session' => $this->faker->date(),
            'last_session' => $time,
            'start_time' => $time,
            'finish_time' => $time+$this->faker->time('H:i:s', '+3 hours'),
        ];
    }
}
