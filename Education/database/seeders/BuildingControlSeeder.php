<?php

namespace Database\Seeders;

use App\Models\BuildingControl;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuildingControlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('building_controls')->insert(
            [
            [
                'user_id' => 2, 'building_id' => 1
            ],
            [
                'user_id' => 3, 'building_id' => 2
            ],
            [
                'user_id' => 4, 'building_id' => 3
            ]
        ]
        );
    }
}
