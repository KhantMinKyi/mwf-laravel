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
        Schema::create('committees', function (Blueprint $table) {
            $table->id();
            $table->string('committee_name');
            $table->string('committee_name_mm');
            $table->string('committee_job_title');
            $table->string('committee_job_title_mm');
            $table->string('committee_image');
            $table->boolean('committee_is_show_front')->default(0);
            $table->foreignId('committee_created_user_id')->constrained('users');
            $table->foreignId('committee_updated_user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('committees');
    }
};
