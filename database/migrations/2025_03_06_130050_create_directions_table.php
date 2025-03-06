<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('directions', function (Blueprint $table) {
            $table->id()->from(1001);

            $table->string('name_uk');
            $table->string('name_en');
            $table->string('name_ru');
            $table->boolean('show_on_site')->default(false);
            $table->integer('order_column')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('directions');
    }
};
