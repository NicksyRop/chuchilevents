<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

            'name' => 'Admin',
            'role' => 'Admin',
            'email' => 'kipkorirnickson45@gmail.com',
            'password' => Hash::make('password'),

        ]);

        User::create([

            'name' => 'Nicksy',
            'email' => 'nicksonkipkorir25@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
