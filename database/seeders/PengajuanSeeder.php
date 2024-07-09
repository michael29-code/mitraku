<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengajuans')->insert([
            [
                'name' => 'John Doe',
                'user_id' => 2,
                'address' => '123 Main St',
                'kategori' => 'Penawaran Produk',
                'contact_number' => '1234567890',
                'mitra_details' => 'Detail mitra untuk John Doe.',
                'start_time' => '2024-07-01',
                'duration' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'user_id' => 2,
                'address' => '456 Elm St',
                'kategori' => 'Perjanjian Kerjasama',
                'contact_number' => '0987654321',
                'mitra_details' => 'Detail mitra untuk Jane Smith.',
                'start_time' => '2024-07-02',
                'duration' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more sample data as needed
        ]);
    }
}