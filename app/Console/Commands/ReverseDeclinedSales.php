<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
class ReverseDeclinedSales extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:reverse-declined-sales';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reverse wallet balance for declined sales where wallet_reverse is 0';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sales = \App\Models\Sales::where('status', 'Denied')->where('wallet_reverse', '0')->get();

        if(!empty($sales) && count($sales)>0){

            foreach ($sales as $sale) {
                DB::transaction(function () use ($sale) {
                    $user = \App\Models\User::find($sale->user_id);
                    if ($user) {
                        // Update user balance
                        $user->hf_balance += $sale->wallet;
                        $user->save();
                        
                        // Mark wallet_reverse as 1
                        $sale->wallet_reverse = '1';
                        $sale->save();
                    }
                });
            }
        }

        $this->info('Declined sales wallet balances reversed successfully.');
    }
}
