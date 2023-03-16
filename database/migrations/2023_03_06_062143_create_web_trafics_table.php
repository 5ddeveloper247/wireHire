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
        Schema::create('web_trafics', function (Blueprint $table) {
            $table->id();
            $table->integer('num_of_visitor');
            $table->integer('unique_visitor');
            $table->string('time_duration');
            $table->string('visitor_status');
            $table->integer('new_visitor');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_trafics');
    }
};
