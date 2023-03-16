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
        Schema::create('industry_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('industryexp_location');
            $table->string('industry_job_description');
            $table->string('industry_name');
            $table->string('industry_department');
            $table->string('industry_position');
            $table->date('industry_start_date');
            $table->date('industry_end_date');
            $table->integer('candidate_id');
            // $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->integer('ranking_id');
            // $table->foreign('ranking_id')->references('id')->on('rankings');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('industry_experiences');
    }
};
