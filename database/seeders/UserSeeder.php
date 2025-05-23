<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'aqil',
            'role' => 'admin',
            'email' => 'qilz@gmail.com',
            'position' => 'CEO',
            'department' => 'IT',
            'password' => Hash::make('12345678'),
        ]);

        User::factory()->create([
            'name' => 'mikazuki',
            'email' => 'mikazuki@gmail.com',
            'position' => 'CEO',
            'department' => 'IT',
            'password' => Hash::make('12345678'),
        ]);

        User::factory()->create([
            'name' => 'qolbi',
            'email' => 'qolbi@gmail.com',
            'position' => 'Ustad',
            'department' => 'NU',
            'password' => Hash::make('12345678'),
        ]);
    }
}
