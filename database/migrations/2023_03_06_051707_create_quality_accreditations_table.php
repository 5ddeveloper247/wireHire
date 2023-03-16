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
        Schema::create('quality_accreditations', function (Blueprint $table) {
            $table->id();
            $table->string('qua_acc_name');
            $table->date('qua_acc_date');
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
        Schema::dropIfExists('quality_accreditations');
    }
};
