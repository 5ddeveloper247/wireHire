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
        Schema::create('academics', function (Blueprint $table) {
            $table->id();
            $table->string('academic_degre');
            $table->string('major');
            $table->date('year_of_graduate');
            $table->string('uni_name');
            $table->integer('uni_rank');
            $table->string('uni_location');
            $table->string('cumulative_gpa');
           
            $table->integer('prog_rank')->nullable();
            $table->string('deg_research_title')->nullable();
            $table->string('letter')->nullable();
            $table->string('cit_accounts')->nullable();
            $table->string('transcript');

            $table->string('resume');
            $table->string('certificate');
            $table->string('teaching_prep');
            $table->integer('ranking_id')->nullable();
            // $table->foreign('ranking_id')->references('id')->on('rankings');
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
        Schema::dropIfExists('academics');
    }
};
?>
