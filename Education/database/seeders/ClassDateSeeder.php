<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class ClassDateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
//        dd(Carbon::createFromDate(Course::all()[1]->first_session)->addDays(7)->toDate());
        foreach (Course::all() as $course)
        {
            for ($i=0; $i<16; $i++){

                DB::table('class_dates')->insert([
                    'classroom_id' => $course->classroom_id,
                    'classroom_name' => Classroom::query()->find(Course::all()->random()->classroom_id)->name,
                    'course_id' => $course->id,
                    'course_name' => $course->name,
                    'teacher_id' => $course->teacher_id,
                    'teacher_name' => $course->teacher_name,
                    'date' => Carbon::createFromDate($course->first_session)->addDays($i*7)->toDate(),
                    'start_time' => $course->start_time,
                    'finish_time' => $course->finish_time,
                ]);
            }
        };
    }
}
