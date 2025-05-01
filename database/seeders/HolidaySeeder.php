<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HolidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "holiday_type"=>"Trading",
                "year"=>"2025",
                "date"=>"26 February 2025",
                "holiday"=>"Mahashivratri",
                "exchanges"=>"NSE BSE",
                "weak_day"=>"Wednesday"
            ],[
                "holiday_type"=>"Trading",
                "year"=>"2025",
                "date"=>"14 March 2025",
                "holiday"=>"Holi",
                "exchanges"=>"NSE BSE MCX",
                "weak_day"=>"Friday"
            ],[
                "holiday_type"=>"Trading",
                "year"=>"2025",
                "date"=>"31 March 2025",
                "holiday"=>"Id-ul-Fitr (Ramadan Eid)",
                "exchanges"=>"NSE BSE",
                "weak_day"=>"Monday"
            ],[
                "holiday_type"=>"Trading",
                "year"=>"2025",
                "date"=>"10 April 2025",
                "holiday"=>"Shri Mahaveer Jayanti",
                "exchanges"=>"NSE BSE",
                "weak_day"=>"Thursday"
            ],[
                "holiday_type"=>"Trading",
                "year"=>"2025",
                "date"=>"14 April 2025",
                "holiday"=>"Dr. Baba Saheb Ambedkar Jayanti",
                "exchanges"=>"NSE BSE MCX",
                "weak_day"=>"Monday"
            ],[
                "holiday_type"=>"Trading",
                "year"=>"2025",
                "date"=>"18 April 2025",
                "holiday"=>"Good Friday",
                "exchanges"=>"NSE BSE",
                "weak_day"=>"Friday"
            ],[
                "holiday_type"=>"Trading",
                "year"=>"2025",
                "date"=>"01 May 2025",
                "holiday"=>"Maharashtra Day",
                "exchanges"=>"NSE BSE",
                "weak_day"=>"Thursday"
            ],[
                "holiday_type"=>"Trading",
                "year"=>"2025",
                "date"=>"07 June 2025",
                "holiday"=>"Bakri Id",
                "exchanges"=>"NSE BSE",
                "weak_day"=>"Saturday"
            ],[
                "holiday_type"=>"Trading",
                "year"=>"2025",
                "date"=>"15 August 2025",
                "holiday"=>"Independence Day",
                "exchanges"=>"NSE BSE",
                "weak_day"=>"Friday"
            ],[
                "holiday_type"=>"Trading",
                "year"=>"2025",
                "date"=>"27 August 2025",
                "holiday"=>"Ganesh Chaturthi",
                "exchanges"=>"NSE BSE",
                "weak_day"=>"Wednesday"
            ],[
                "holiday_type"=>"Trading",
                "year"=>"2025",
                "date"=>"02 October 2025",
                "holiday"=>"Mahatma Gandhi Jayanti/Dussehra",
                "exchanges"=>"NSE BSE",
                "weak_day"=>"Thursday"
            ],[
                "holiday_type"=>"Trading",
                "year"=>"2025",
                "date"=>"21 October 2025",
                "holiday"=>"Diwali Laxmi Pujan*",
                "exchanges"=>"NSE BSE MCX",
                "weak_day"=>"Tuesday"
            ],[
                "holiday_type"=>"Trading",
                "year"=>"2025",
                "date"=>"22 October 2025",
                "holiday"=>"Diwali-Balipratipada",
                "exchanges"=>"NSE BSE MCX",
                "weak_day"=>"Wednesday"
            ],[
                "holiday_type"=>"Trading",
                "year"=>"2025",
                "date"=>"05 November 2025",
                "holiday"=>"Prakash Gurpurb Sri Guru Nanak Dev",
                "exchanges"=>"NSE BSE",
                "weak_day"=>"Wednesday"
            ],[
                "holiday_type"=>"Trading",
                "year"=>"2025",
                "date"=>"25 December 2025",
                "holiday"=>"Christmas",
                "exchanges"=>"NSE BSE",
                "weak_day"=>"Thursday"
            ],[
                "holiday_type"=>"SETTLEMENT",
                "year"=>"2025",
                "date"=>"01 April 2025",
                "holiday"=>"16 August 2025",
                "exchanges"=>"SETTLEMENT",
                "weak_day"=>"Tuesday"
            ],[
                "holiday_type"=>"SETTLEMENT",
                "year"=>"2025",
                "date"=>"01 April 2025",
                "holiday"=>"Parsi New Year",
                "exchanges"=>"SETTLEMENT",
                "weak_day"=>"Saturday"
            ],
        ];

        \DB::table('holidays')->delete(); // Delete all records
		\DB::statement('ALTER TABLE holidays AUTO_INCREMENT = 1');
        foreach($data as $val){

            $holiday = new \App\Models\Holiday();
            $holiday->holiday_type = $val['holiday_type'];
            $holiday->year = $val['year'];
            $holiday->date = date('Y-m-d', strtotime($val['date']));
            $holiday->holiday = $val['holiday'];
            $holiday->exchanges = $val['exchanges'];
            $holiday->weak_day = $val['weak_day'];
            $holiday->save();
        }

        // \App\Models\Holiday::create($data);
    }
}
