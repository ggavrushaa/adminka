<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('translations', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->foreignId('page_id')->constrained('translations_pages');
            $table->string('field')->unique();
            $table->text('text_en');
            $table->text('text_ru');
        $table->text('text_uk');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('translations');
    }
};
