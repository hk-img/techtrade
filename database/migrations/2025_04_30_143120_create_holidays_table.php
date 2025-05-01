<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->string('holiday_type')->nullaable();
            $table->string('year')->nullaable();
            $table->string('holiday')->nullaable();
            $table->string('exchanges')->nullaable();
            $table->string('date')->nullaable();
            $table->string('weak_day')->nullaable();
            $table->enum('status',['0','1'])->default('1')->comment('0=>inactive,1=>active');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('holidays');
    }
};
