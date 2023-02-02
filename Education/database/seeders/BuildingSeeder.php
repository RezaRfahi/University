<?php

namespace Database\Seeders;

use App\Models\Building;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {;
        DB::table('buildings')->insert([
            [ 'name' => 'eduction', 'warden_name' => User::all()->random()->name.'1' ],
            [ 'name' => 'andishe', 'warden_name' => User::all()->random()->name.'2' ],
            [ 'name' => 'fiscal', 'warden_name' => User::all()->random()->name.'3' ]
        ]);
    }
}
