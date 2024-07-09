<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvertiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $advertisements = [
            [
                'title' => '1 Month Subscription',
                'price' => 10.00,
                'subscriptionDate' => Carbon::now(),
                'period' => 1,
                'description' => 'Subscription for 1 month',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '6 Months Subscription',
                'price' => 50.00,
                'subscriptionDate' => Carbon::now(),
                'period' => 6,
                'description' => 'Subscription for 6 months',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '12 Months Subscription',
                'price' => 90.00,
                'subscriptionDate' => Carbon::now(),
                'period' => 12,
                'description' => 'Subscription for 12 months',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('advertise')->insert($advertisements);
    }
}
