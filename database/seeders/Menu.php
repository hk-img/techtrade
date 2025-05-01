<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Ranium\SeedOnce\Traits\SeedOnce;
use Illuminate\Support\Facades\DB;

class Menu extends Seeder
{
    use SeedOnce;
    
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    
    public function run(){

        $menus = array(
			array('id' => '1','label' => 'Dashboard','link' => 'admin/dashboard','active_link' => 'admin/dashboard','icon' => 'fa fa-desktop','parent' => '0','sort' => '1','status' => '1','created_at' => '2021-11-22 04:26:53','updated_at' => '2024-08-11 16:15:50'),
			array('id' => '2','label' => 'Resources','link' => 'admin/resources','active_link' => 'admin/resources','icon' => 'fa fa-file-text','parent' => '0','sort' => '2','status' => '2','created_at' => '2021-11-22 04:26:53','updated_at' => '2024-08-11 16:15:50'),
			array('id' => '3','label' => 'Downloads','link' => 'admin/resources/download','active_link' => 'admin/resources/download','icon' => '','parent' => '2','sort' => '1','status' => '1','created_at' => '2021-11-22 04:26:53','updated_at' => '2024-08-11 16:15:50'),
			array('id' => '4','label' => 'Category','link' => 'admin/resources/download/category/list','active_link' => 'admin/resources/download/category','icon' => '','parent' => '3','sort' => '1','status' => '1','created_at' => '2021-11-22 04:26:53','updated_at' => '2024-08-11 16:15:50'),
			array('id' => '5','label' => 'Holiday','link' => 'admin/resources/holiday/list','active_link' => 'admin/resources/holiday','icon' => '','parent' => '2','sort' => '1','status' => '1','created_at' => '2021-11-22 04:26:53','updated_at' => '2024-08-11 16:15:50'),
			array('id' => '6','label' => 'Important Links','link' => 'admin/important-links','active_link' => 'admin/important-links','icon' => 'fa fa-external-link-square','parent' => '0','sort' => '3','status' => '1','created_at' => '2021-11-22 04:26:53','updated_at' => '2024-08-11 16:15:50'),
			array('id' => '7','label' => 'Contact','link' => 'admin/contact','active_link' => 'admin/contact','icon' => 'fa fa-address-card-o','parent' => '0','sort' => '4','status' => '1','created_at' => '2021-11-22 04:26:53','updated_at' => '2024-08-11 16:15:50'),
			array('id' => '8','label' => 'Information','link' => 'admin/information','active_link' => 'admin/information','icon' => 'fa fa-info-circle','parent' => '0','sort' => '6','status' => '1','created_at' => '2021-11-22 04:26:53','updated_at' => '2024-08-11 16:15:50'),
			array('id' => '9','label' => 'Contact-info','link' => 'admin/information/contact-info','active_link' => 'admin/information/contact-info','icon' => '','parent' => '8','sort' => '1','status' => '1','created_at' => '2021-11-22 04:26:53','updated_at' => '2024-08-11 16:15:50'),
			array('id' => '10','label' => 'Carrier','link' => 'admin/carrier','active_link' => 'admin/carrier','icon' => 'fa fa-codiepie','parent' => '0','sort' => '5','status' => '1','created_at' => '2021-11-22 04:26:53','updated_at' => '2024-08-11 16:15:50'),
		);

		DB::table('menus')->delete(); // Delete all records
		DB::statement('ALTER TABLE menus AUTO_INCREMENT = 1'); // Reset Auto Increment
		\App\Models\Menu::insert($menus);
    }
}
