<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Ranium\SeedOnce\Traits\SeedOnce;

class Designation extends Seeder
{
    use SeedOnce;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Designation::truncate();

        $designation = [
            ['designations' => 'Admin']
        ];
		
		\App\Models\Designation::insert($designation);
    }
}
