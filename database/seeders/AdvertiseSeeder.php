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
                // 'subscriptionDate' => Carbon::now(),
                'period' => 1,
                'description' => 'Subscription for 1 month. Enjoy full access to our premium features and exclusive content. This plan is perfect for those who want to explore our service without a long-term commitment.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '6 Months Subscription',
                'price' => 50.00,
                // 'subscriptionDate' => Carbon::now(),
                'period' => 6,
                'description' => 'Subscription for 6 months. Save more with our half-year plan. Get all the benefits of the monthly subscription at a reduced rate. Ideal for users looking to enjoy consistent access to our services for an extended period.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '12 Months Subscription',
                'price' => 90.00,
                // 'subscriptionDate' => Carbon::now(),
                'period' => 12,
                'description' => 'Subscription for 12 months. The best value for long-term users. Enjoy uninterrupted access to all premium features for a full year, along with exclusive annual perks and the lowest monthly rate. Perfect for those committed to getting the most out of our service.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        

        DB::table('advertise')->insert($advertisements);
    }
}
