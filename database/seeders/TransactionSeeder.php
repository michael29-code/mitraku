<?php

namespace Database\Seeders;

use App\Models\Transaction;
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
        // $advertisements = DB::table('advertise')->get();
        // $users = DB::table('users')->pluck('id');

        // foreach ($users as $user) {
        //     foreach ($advertisements as $advertisement) {
        //         DB::table('transactions')->insert([
        //             [
        //                 'user_id' => $user,
        //                 'advertise_id' => $advertisement->id,
        //                 'gross_amount' => $advertisement->price,
        //                 'status' => 'pending',
        //                 'snap_token' => '',
        //             ]
        //         ]);
        //     }
        // }
        Transaction::create([
            'user_id' => 3,
            'advertise_id' => 1,
            'gross_amount' => 10,
            'starts_at' => Carbon::now()->subMonth(),
            'ends_at' => Carbon::now()->subDay(),
            'status' => 'active',
        ]);

        Transaction::create([
            'user_id' => 4,
            'advertise_id' => 1,
            'gross_amount' => 10,
            'starts_at' => Carbon::now()->subMonth(),
            'ends_at' => Carbon::now()->addDay(),
            'status' => 'active',
        ]);
    }
}
