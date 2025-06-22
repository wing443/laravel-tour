<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('request_slug');
            $table->string('slug'); // Slug для URL (например, 'tour1')
            $table->text('description');
            $table->unsignedInteger('price');
            $table->foreignId('business_id')->constrained('businesses');
            $table->integer('available_places');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->string('image')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};