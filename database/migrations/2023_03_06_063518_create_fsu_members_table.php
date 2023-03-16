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
        Schema::create('fsu_members', function (Blueprint $table) {
            $table->id();
            $table->integer('uni_id');
            $table->string('email');
            $table->string('department');
            $table->string('college');
            $table->integer('phone_no');
            $table->string('address');
            $table->string('status');
            $table->integer('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->integer('calender_id');
            // $table->foreign('calender_id')->references('id')->on('calenders');
            $table->integer('id_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fsu_members');
    }
};
