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
        Schema::create('rankings', function (Blueprint $table) {
            $table->id();
            $table->string('candidate_name');
            $table->string('degree');
            $table->string('university');
            $table->date('application_date');
            $table->integer('candidate_id');
            // $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->integer('criteria_id');
            // $table->foreign('criteria_id')->references('id')->on('criterias');
            $table->integer('cit_id')->nullabe();
            $table->integer('patent_id')->nullabe();
            $table->integer('suppervision_id')->nullable();
            $table->integer('comwork')->nullable();
            $table->integer('teaching_exp_id')->nullable();
            $table->integer('certificate_id');
            // $table->foreign('certificate_id')->references('id')->on('certifictes');
            // $table->integer('cit_id')->nullabe();
            $table->integer('award_id')->nullabe();
            $table->integer('industry_id');
            // $table->foreign('industry_id')->references('id')->on('industry_experiences');
            $table->integer('head_dep_id');
            // $table->foreign('head_dep_id')->references('id')->on('head_departments');
            $table->integer('qa_acc_id');
            // $table->foreign('qa_acc_id')->references('id')->on('quality_accreditations');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rankings');
    }
};
