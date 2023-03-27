<?php

namespace Database\Seeders;

use App\Models\PermissionUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=3;$i++){
            PermissionUser::create([
                'user_id' => 1, 'permission_id' => $i
            ]);
        }
    }
}
