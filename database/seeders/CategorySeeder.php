<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'jenisKategori' => 'Restoran',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('categories')->insert([
            'jenisKategori' => 'Teknologi',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('categories')->insert([
            'jenisKategori' => 'Bangunan',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
