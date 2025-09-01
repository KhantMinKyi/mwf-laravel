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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('post_banner');
            $table->longText('post_title');
            $table->date('post_created_date');
            $table->foreignId('post_created_user_id')->constrained('users');
            $table->foreignId('post_updated_user_id')->constrained('users');
            $table->string('post_category');
            $table->boolean('post_is_show_front')->default(0);
            $table->longText('post_body');
            $table->longText('post_image')->nullable();
            $table->boolean('post_is_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
