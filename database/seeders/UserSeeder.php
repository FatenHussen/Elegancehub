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
        User::create([
            'name' =>'User',
            'email' => 'user@user.com',
            'city_id' => 1,
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'image' => null,
        ]);
        User::create([
            'name' =>'User',
            'email' => 'user1@user.com',
            'city_id' => 1,
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'image' => null,
        ]);
        User::create([
            'name' =>'User',
            'email' => 'user2@user.com',
            'city_id' => 1,
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'image' => null,
        ]);
    }
}