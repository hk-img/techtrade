<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
     
	/**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('seeders')->truncate();
      
      $this->call(Designation::class);
      $this->call(Menu::class);
      $this->call(User_role::class);
      $this->call(User::class);
      $this->call(DownloadSeeder::class);
      $this->call(HolidaySeeder::class);
      $this->call(ImportantLink::class);
      \Artisan::call('seedonce:mark-seeded');
    }
}
