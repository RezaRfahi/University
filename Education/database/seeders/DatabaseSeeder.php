<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\BuildingControl;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            BuildingSeeder::class,
            TeacherSeeder::class,
            ClassroomSeeder::class,
//            CourseSeeder::class,
//            ClassDateSeeder::class,
            BuildingControlSeeder::class,
            LoanSeeder::class,
            LogSeeder::class
        ]);
    }
}
