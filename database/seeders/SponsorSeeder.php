<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sponsors = [
            ['name' => 'Sponsor 1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sponsor 2', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sponsor 3', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sponsor 4', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sponsor 5', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sponsor 6', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sponsor 7', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sponsor 8', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sponsor 9', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        DB::table('sponsors')->insert($sponsors);
    }
}
