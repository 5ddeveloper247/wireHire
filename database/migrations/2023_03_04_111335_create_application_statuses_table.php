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
        Schema::create('application_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('jobtitle');
            $table->date('applicationdate');
            $table->string('status');
            $table->date('interviewdate');
            // $table->unsignedBigInteger('candidate_id');
            // $table->foreign('candidate_id')
            //       ->references('id')
            //       ->on('candidates');
            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_statuses');
    }
};
