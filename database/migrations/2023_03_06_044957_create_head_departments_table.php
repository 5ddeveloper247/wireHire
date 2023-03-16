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
        Schema::create('head_departments', function (Blueprint $table) {
            $table->id();
            $table->string('head_dep');
            $table->binary('head_dep_certificate');
            $table->integer('candidate_id');
            // $table->foriegn('candidate_id')->references('id')->on('candidates');
            $table->integer('ranking_id');
            // $table->foreign('ranking_id')->references('id')->on('rankings');
            $table->integer('employee_id');
            // $table->foreign('employee_id')->references('id')->on('employees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('head_departments');
    }
};
