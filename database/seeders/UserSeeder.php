<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::truncate();
        User::create([
            'username' => 'ADMINNNN',
            'level' => 1,
            'date_of_birth' => '1999-01-01',
            'email' => 'admin@admin.com',
            'password' => bcrypt('adminadmin'),
            'address' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit, nemo!',
            'image' => '/images/profile_admin.jpg',
            'isBlocked' => '0'
            // 'remember_token' => Str::random(60)
        ]);

        User::create([
            'username' => 'User1',
            'level' => 2,
            'date_of_birth' => '2000-02-02',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('useruser'),
            'address' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit, nemo!',
            'image' => '/images/profile_user.jpg',
            'isBlocked' => '0'
        ]);

        User::create([
            'username' => 'UserWMitra',
            'level' => 3,
            'date_of_birth' => '2001-03-03',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('useruser'),
            'address' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit, nemo!',
            'image' => '/images/profile_user.jpg',
            'isBlocked' => '0'
        ]);


    }
}
