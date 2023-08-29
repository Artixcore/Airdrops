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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('course_id');
            $table->string('name');
            $table->string('category');
            $table->string('sub_category');
            $table->string('duration');
            $table->string('lectures');
            $table->string('projects');
            $table->string('overview');
            $table->string('intro_video');
            $table->string('fees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
