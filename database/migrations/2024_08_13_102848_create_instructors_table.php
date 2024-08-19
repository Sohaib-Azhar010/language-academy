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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation');
            $table->string('image_path')->nullable();
            $table->string('teaching_experience')->nullable();
            $table->string('seniority')->nullable();
            $table->string('leadership_role')->nullable();
            $table->string('qualifications')->nullable();
            $table->string('scholarly_recognition')->nullable();
            $table->text('honoring_words')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
