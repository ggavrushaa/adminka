<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Pest\Laravel\from;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id()->from(1001);

            $table->string('title_uk');
            $table->text('description_uk');
            $table->string('title_en');
            $table->text('description_en');
            $table->string('title_ru');
            $table->text('description_ru');

            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->string('link')->nullable();
            $table->string('project_type')->nullable();
            
            $table->boolean('show_on_site')->default(false);
            $table->boolean('no_work_page')->default(false);
            $table->boolean('show_in_work_block')->default(false);
            $table->boolean('show_in_footer')->default(false);
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
