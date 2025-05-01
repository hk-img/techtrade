<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Ranium\SeedOnce\Traits\SeedOnce;
use Illuminate\Support\Facades\DB;

class User_role extends Seeder
{
    use SeedOnce;
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('user_roles')->truncate();

        $user_roles = array(
            array('id' => '1','designation_id' => '1','menu_id' => '1','status' => '1','created_at' => '2022-11-18 12:04:12','updated_at' => '2024-08-11 16:15:54'),
            array('id' => '2','designation_id' => '1','menu_id' => '2','status' => '1','created_at' => '2022-11-18 12:04:12','updated_at' => '2024-08-11 16:15:54'),
            array('id' => '3','designation_id' => '1','menu_id' => '3','status' => '1','created_at' => '2022-11-18 12:04:12','updated_at' => '2024-08-11 16:15:54'),
            array('id' => '4','designation_id' => '1','menu_id' => '4','status' => '1','created_at' => '2022-11-18 12:04:12','updated_at' => '2024-08-11 16:15:54'),
            array('id' => '5','designation_id' => '1','menu_id' => '5','status' => '1','created_at' => '2022-11-18 12:04:12','updated_at' => '2024-08-11 16:15:54'),
            array('id' => '6','designatiodn_id' => '1','menu_id' => '6','status' => '1','created_at' => '2022-11-18 12:04:12','updated_at' => '2024-08-11 16:15:54'),
            array('id' => '7','designatiodn_id' => '1','menu_id' => '7','status' => '1','created_at' => '2022-11-18 12:04:12','updated_at' => '2024-08-11 16:15:54'),
            array('id' => '8','designatiodn_id' => '1','menu_id' => '8','status' => '1','created_at' => '2022-11-18 12:04:12','updated_at' => '2024-08-11 16:15:54'),
            array('id' => '9','designatiodn_id' => '1','menu_id' => '9','status' => '1','created_at' => '2022-11-18 12:04:12','updated_at' => '2024-08-11 16:15:54'),
            array('id' => '10','designatiodn_id' => '1','menu_id' => '10','status' => '1','created_at' => '2022-11-18 12:04:12','updated_at' => '2024-08-11 16:15:54'),
          );
		  \App\Models\User_role::insert($user_roles);
    }
}
