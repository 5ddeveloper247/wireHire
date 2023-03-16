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
        Schema::create('job_criterias', function (Blueprint $table) {
            $table->id();
            $table->integer('year_of_experience');
            $table->string('university_ranking');
            $table->integer('number_of_certificate');
            $table->integer('no_of_skill');
            $table->string('field_experience');
            $table->integer('jobposition_id');
            // $table->foreign('jobposition_id')->references('id')->on('job_positions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_criterias');
    }
};
