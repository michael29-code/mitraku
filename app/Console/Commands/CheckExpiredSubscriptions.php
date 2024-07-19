<?php

namespace App\Console\Commands;

use App\Models\Transaction;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CheckExpiredSubscriptions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-expired-subscriptions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check and update expired subscriptions';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::info('Starting to check for expired subscriptions...');

        $subscriptions = Transaction::where('status', 'active')->get();
        foreach ($subscriptions as $subscription) {
            if ($subscription->isExpired()) {
                $subscription->update(['status' => 'expired']);
            }
        }
        Log::info('Expired subscriptions check completed.');

        $this->info('Expired subscriptions have been updated.');
    }
}
