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
        $role = Role::create(['name' => 'admin']);

        $admin = User::factory()->create([
            'name' => 'aqil',
            'role' => 'admin',
            'email' => 'qilz@gmail.com',
            'position' => 'CEO',
            'department' => 'IT',
            'password' => Hash::make('123'),
        ]);

        $admin->assignRole($role);
    }
}
