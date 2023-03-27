<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'superAdmin',
            'email' => 'admin@gamil.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin1234'),
            'remember_token' => Str::random(),
            'position' => 'employee',
            'level' => 'administrator'
        ]);
        User::factory()->count(6)->create();
    }
}
