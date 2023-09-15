<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'password' => Hash::make('12345'),
            'scope' => "super-admin",
        ]);

        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('123123'),
            'scope' => "admin",
        ]);
    }
}
