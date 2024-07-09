<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $advertisements = DB::table('advertise')->get();
        $users = DB::table('users')->pluck('id');

        foreach ($users as $user) {
            foreach ($advertisements as $advertisement) {
                DB::table('transactions')->insert([
                    [
                        'user_id' => $user,
                        'advertise_id' => $advertisement->id,
                        'gross_amount' => $advertisement->price,
                        'status' => 'pending',
                        'snap_token' => '',
                    ]
                ]);
            }
        }
    }
}
