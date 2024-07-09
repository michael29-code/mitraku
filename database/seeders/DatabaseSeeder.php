<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Blog;
use Database\Factories\BlogFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(2)->create();

        $this->call([
            UserSeeder::class, 
            MitraSeeder::class,
            PengajuanSeeder::class,
        ]);
        

        // $this->call([
        //     CategorySeeder::class
        // ]);
        // Blog::factory(10)->create();
    }
}
