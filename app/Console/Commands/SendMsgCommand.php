<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
class SendMsgCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-msg-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try{
            $this->info('Sending Messages....');

            $sales = \App\Models\Sales::whereDate('reminder_date',Carbon::today())->get();

            if(!empty($sales)){
                foreach ($sales as $sale) {

                    $sendTo = "91".$sale->mobile; 
                    $templateId = "order_remainder"; 
                    $headerValues = ["1" => "Invoice #12345"];  
                    $bodyValues = ["1" => 'demo'];  
                    $buttonValues = [
                        "1" => 'demo',
                    ]; 
            
                    $res = \App\Helpers\commonHelper::sendWhatsAppMessage($sendTo, $templateId, $headerValues, $bodyValues, $buttonValues);
            
                }
            }
            
        }catch(Exception $e){
            $this->error('Error during sitemap generation: ' . $e->getMessage());
            Log::error('Error during sitemap generation: ' . $e->getMessage());
        }
    }
}
