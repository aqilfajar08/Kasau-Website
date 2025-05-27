<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::findOrCreate('admin', 'web');

        $user = User::create([
            'name' => 'ratna',
            'role' => 'admin',
            'email' => 'ratna@gmail.com',
            'position' => 'Admin Control',
            'department' => 'IT',
            'password' => Hash::make('r4tna#123'),
        ]);

        $user->assignRole($adminRole);
    }
}
