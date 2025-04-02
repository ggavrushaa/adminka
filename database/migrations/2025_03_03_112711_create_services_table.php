<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // Schema::create('services', function (Blueprint $table) {
        //     $table->id()->from(1001);
        //     $table->string('name_ru');
        //     $table->string('name_en');
        //     $table->string('name_uk');

        //     $table->json('category');

        //     $table->boolean('faq_on_site')->default(false);
        //     $table->boolean('show_on_site')->default(false);

        //     $table->string('seo_title_ru')->nullable();
        //     $table->string('seo_title_en')->nullable();
        //     $table->string('seo_title_uk')->nullable();

        //     $table->string('seo_h1_ru')->nullable();
        //     $table->string('seo_h1_en')->nullable();
        //     $table->string('seo_h1_uk')->nullable();

        //     $table->text('seo_desc_ru')->nullable();
        //     $table->text('seo_desc_en')->nullable();
        //     $table->text('seo_desc_uk')->nullable();

        //     $table->text('seo_keywords_ru')->nullable();
        //     $table->text('seo_keywords_en')->nullable();
        //     $table->text('seo_keywords_uk')->nullable();

        //     $table->longText('seo_text_ru')->nullable();
        //     $table->longText('seo_text_en')->nullable();
        //     $table->longText('seo_text_uk')->nullable();

        //     $table->string('seo_image')->nullable();

        //     $table->timestamps();
        // });

        Schema::create('service_technologies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
            $table->foreignId('tech_id')->constrained('tech_stacks')->onDelete('cascade');
        });

        Schema::create('service_cases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
            $table->foreignId('case_id')->constrained('works')->onDelete('cascade');
        });

        Schema::create('articles', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->string('name_ru');
            $table->string('name_en');
            $table->string('name_uk');

            $table->string('image')->nullable();
            $table->integer('views')->default(0);

            $table->text('text_ru');
            $table->text('text_en');
            $table->text('text_uk');

            $table->string('seo_title_ru')->nullable();
            $table->string('seo_title_en')->nullable();
            $table->string('seo_title_uk')->nullable();

            $table->string('seo_h1_ru')->nullable();
            $table->string('seo_h1_en')->nullable();
            $table->string('seo_h1_uk')->nullable();

            $table->text('seo_desc_ru')->nullable();
            $table->text('seo_desc_en')->nullable();
            $table->text('seo_desc_uk')->nullable();

            $table->text('seo_keywords_ru')->nullable();
            $table->text('seo_keywords_en')->nullable();
            $table->text('seo_keywords_uk')->nullable();

            $table->longText('seo_text_ru')->nullable();
            $table->longText('seo_text_en')->nullable();
            $table->longText('seo_text_uk')->nullable();

            $table->string('seo_image')->nullable();

            $table->boolean('show_on_site')->default(false);
            $table->timestamps();
        });

        Schema::create('service_articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
            $table->foreignId('article_id')->constrained('articles')->onDelete('cascade');
        });

        Schema::create('article_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id')->constrained('articles')->onDelete('cascade');
            $table->foreignId('tag_id')->constrained('tags')->onDelete('cascade');
        });

        Schema::create('article_cases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id')->constrained('articles')->onDelete('cascade');
            $table->foreignId('case_id')->constrained('works')->onDelete('cascade');
        });

        Schema::create('article_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id')->constrained('articles')->onDelete('cascade');
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_technologies');
        Schema::dropIfExists('service_cases');
        Schema::dropIfExists('service_articles');
        Schema::dropIfExists('articles');
        Schema::dropIfExists('service_articles');
        Schema::dropIfExists('article_tags');
        Schema::dropIfExists('article_cases');
        Schema::dropIfExists('article_services');
    }
};
