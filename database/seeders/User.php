<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Ranium\SeedOnce\Traits\SeedOnce;

class User extends Seeder
{
    use SeedOnce;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // password -- 12345
        $user = [
            'id' => '1',
            'name' => 'Tech Trade',
            'email' => 'admin@gmail.com',
            'unique_id' => 'TechTrade',
            'referrer_id' => 'admin',
            'referrer_name' => NULL,
            'phone_code' => '+91',
            'mobile' => '9876543210',
            'user_type' => 'Admin',
            'otp' => '123456',
            'password' => '$2y$12$uJ0zD/l2VPtTSX.e8RLTPecOftNkCpB6oGlOFzIWZQ637kM9c0MTW',
            'designation_id' => '1',
            'remember_token' => NULL,
            'profileimage' => 'admin.jpg',
            'status' => 'Pending',
            'created_at' => '2022-10-31 09:26:13',
            'updated_at' => '2024-11-25 10:30:07'
        ];

        $contact = [
            "corporate_office"=>"F-116, City Plaza, Space Cinema, Bani Park,Jaipur, Rajasthan - 302016 ",
            "registered_office"=>"U-6 Krishna Apartment, Hathi Babu Marg, Bani Park,Jaipur, Rajasthan- 302016, India",
            "contact_no"=>"7792022561",
            "email"=>"info@techtrade.in",
            "link"=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3556.9856605068194!2d75.79180492000768!3d26.93566906296804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db3eed2255cbd%3A0xbe980d5d70708d61!2sINOX%20City%20Plaza!5e0!3m2!1sen!2sin!4v1739424446141!5m2!1sen!2sin"
        ];

        \App\Models\Information::updateOrInsert(
            ['id' => 1], // Check existing record by 'id'
            $contact // Update or insert data (must be an associative array)
        );
        
        \App\Models\User::updateOrInsert(
            ['id' => 1], // Check existing record by 'id'
            $user // Update or insert data (must be an associative array)
        );
        
    }
}
