<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImportantLink extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name"=>"NSE",
                "link"=>"https://www.nseindia.com/"
            ],[
                "name"=>"BSE",
                "link"=>"https://www.bseindia.com/"
            ],[
                "name"=>"SEBI",
                "link"=>"https://www.sebi.gov.in/"
            ],[
                "name"=>"MCX",
                "link"=>"https://www.mcxindia.com/"
            ],[
                "name"=>"NCDEX",
                "link"=>"https://www.ncdex.com/"
            ],[
                "name"=>"MSEI",
                "link"=>"https://www.msei.in/"
            ],[
                "name"=>"RBI",
                "link"=>"https://www.rbi.org.in/"
            ],[
                "name"=>"CDSL",
                "link"=>"https://www.cdslindia.com/index.html"
            ],[
                "name"=>"NDSL",
                "link"=>"https://nsdl.co.in/"
            ],[
                "name"=>"Smart ODR",
                "link"=>"https://smartodr.in/login"
            ],[
                "name"=>"KMP",
                "link"=>url('kmp')
            ],[
                "name"=>"Scores",
                "link"=>"https://www.scores.gov.in/scores/Welcome.html"
            ],[
                "name"=>"Investor Guide NSE",
                "link"=>"https://www.nseindia.com/invest/investors-home"
            ],[
                "name"=>"NSDL E-Voting",
                "link"=>"https://www.evoting.nsdl.com/"
            ],[
                "name"=>"Client Collateral Details",
                "link"=>"https://investorhelpline.nseclearing.in/ClientCollateral/welcomeCLUser"
            ],
        ];

        \DB::table('links')->delete(); // Delete all records
		\DB::statement('ALTER TABLE links AUTO_INCREMENT = 1');

        foreach($data as $val){

            $link = new \App\Models\Link();
            $link->name = $val['name'];
            $link->link = $val['link'];
            $link->save();
        }
    }
}
