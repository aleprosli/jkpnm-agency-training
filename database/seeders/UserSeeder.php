<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => 3,
            'name' => 'SuperAdmin',
            'email' => 'admin@gov.my',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'id' => 3,
            'name' => 'SuperAdmin',
            'email' => 'admin@gov.my',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
