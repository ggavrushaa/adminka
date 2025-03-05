<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tech_stacks', function (Blueprint $table) {
            $table->id()->from(1001);

            $table->string('name');
            $table->foreignId('category_id')->constrained('tech_categories')->onDelete('cascade');
            $table->string('image');
            $table->string('image_white');
            $table->boolean('show_on_site')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tech_stacks');
    }
};
