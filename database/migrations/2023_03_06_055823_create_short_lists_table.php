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
        Schema::create('short_lists', function (Blueprint $table) {
            $table->id();
            $table->string('rank');
            $table->string('degree');
            $table->string('university');
            $table->string('candidate_name');
            $table->string('interview_date');
            $table->integer('candidate_id');
            // $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->integer('ranking_id');
            // $table->foreign('ranking_id')->references('id')->on('rankings_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('short_lists');
    }
};
