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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('gender');
            $table->integer('national_id');
            $table->integer('university_id');
           $table->integer('user_id');
            $table->string('email_address');
            $table->integer('depart_id');
            $table->string('college');
            $table->integer('tel_number');
            $table->string('address');
            $table->string('employee_status')->default(0);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
