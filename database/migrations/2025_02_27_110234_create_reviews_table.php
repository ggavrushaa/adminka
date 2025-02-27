<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id()->from(1001);

            $table->string('quote_uk');
            $table->text('text_uk');
            $table->string('quote_en');
            $table->text('text_en');
            $table->string('quote_ru');
            $table->text('text_ru');

            $table->integer('rating')->default(0);
            $table->string('link')->nullable();
            $table->string('author');
            $table->string('position')->nullable();
            $table->string('project_name');
            $table->foreignId('source_id')->constrained('review_sources')->onDelete('cascade');
            $table->boolean('show_on_site')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
