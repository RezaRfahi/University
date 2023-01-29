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
    {
        $warden1=User::all()->random();
        $warden2=User::all()->random();
        $warden3=User::all()->random();

        DB::table('buildings')->insert([
            [
                'name' => 'eduction',
                'user_id' => $warden1->id,
                'warden_name' => $warden1->name
            ],
            [
                'name' => 'eduction',
                'user_id' => $warden2->id,
                'warden_name' => $warden2->name
            ],
            [
                'name' => 'eduction',
                'user_id' => $warden3->id,
                'warden_name' => $warden3->name
            ]
        ]);
    }
}
