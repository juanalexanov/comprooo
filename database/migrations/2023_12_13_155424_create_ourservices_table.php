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
        Schema::create('ourservices', function (Blueprint $table) {
            $table->id();
            $table->string('url_image');
            $table->string('title');
            $table->string('section1title');
            $table->string('section1description');
            $table->string('section2title');
            $table->string('section2description');
            $table->string('section3title');
            $table->string('section3description');
            $table->string('section4title');
            $table->string('section4description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ourservices');
    }
};
