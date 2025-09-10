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
        Schema::create('achements', function (Blueprint $table) {
            $table->id();
            $table->string('achement_title');
            $table->string('achement_title_mm');
            $table->string('achement_location');
            $table->string('achement_location_mm');
            $table->string('achement_start_date');
            $table->string('achement_end_date');
            $table->string('achement_description');
            $table->string('achement_description_mm');
            $table->string('achement_year');
            $table->string('achement_year_mm');
            $table->foreignId('achement_created_user_id')->constrained('users');
            $table->foreignId('achement_updated_user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achements');
    }
};
