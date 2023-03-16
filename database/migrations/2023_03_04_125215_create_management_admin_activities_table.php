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
        Schema::create('management_admin_activities', function (Blueprint $table) {
            $table->id();
            $table->string('maa_position');
            $table->string('maa_location');
            $table->date('maa_date');
            $table->string('description');
            $table->integer('candidate_id');
            // $table->foreign('candidate_id')->references('candidate_id')->on('candidates');
            $table->integer('ranking_id');
            // $table->foreign('ranking_id')->refernces('ranking_id')->on('rankings');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('management_admin_activities');
    }
};
