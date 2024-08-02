<?php

namespace App\Console\Commands;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ShuffleAdvertisements extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'advertisement:shuffle';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Ambil advertisement yang aktif
        // $activeAdvertisements = Transaction::with('mitraTransaction')->where('status', 'active')->get();
        $activeAdvertisements = DB::table('transactions')
        ->join('mitras', 'transactions.user_id', '=', 'mitras.user_id')->where('status', 'active')
        ->select('transactions.*', 'mitras.*')
        ->get();

        if ($activeAdvertisements->isNotEmpty()) {
            // Shuffle advertisements dan pilih satu
            $shuffledAdvertisement = $activeAdvertisements->random();

            // Simpan hasil shuffle ke dalam cache
            Cache::put('shuffled_advertisement', $shuffledAdvertisement, now()->addMinutes($activeAdvertisements->count()));

            $this->info('Shuffled advertisement has been stored in cache.');
        } else {
            $this->error('No active advertisements found.');
        }

    }
}
