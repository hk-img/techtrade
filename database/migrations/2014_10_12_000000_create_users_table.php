<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('username', 191)->nullable(); // No `AFTER` clause
            $table->string('email', 191)->nullable();
            $table->string('unique_id', 100)->nullable();
            $table->string('referrer_id', 100)->nullable();
            $table->string('referrer_name', 191)->nullable();
            $table->string('phone_code', 100)->default('+91');
            $table->string('mobile', 100)->nullable();
            $table->enum('user_type', ['Admin', 'Super User', 'Sub User', 'User', 'Manager'])->default('User');
            $table->string('otp', 255)->default('0');
            $table->string('password', 191)->nullable();
            $table->integer('designation_id')->default(0);
            $table->text('address')->nullable(); // No `AFTER` clause
            $table->rememberToken();
            $table->string('profileimage', 100)->nullable();
            $table->enum('status', ['Active', 'Pending', 'In-Review', 'Blocked'])->default('Pending');
            $table->softDeletes();
            $table->timestamps();
        
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}