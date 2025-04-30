<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\Work;
use App\Models\Service;
use App\Enums\ServiceCategoryEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    protected $model = \App\Models\Article::class;
    public function definition(): array
    {
        return [
            'name_ru' => fake()->sentence(),
            'name_en' => fake()->sentence(),
            'name_uk' => fake()->sentence(),
            'text_ru' => fake()->paragraph(),
            'text_en' => fake()->paragraph(),
            'text_uk' => fake()->paragraph(),
            'seo_title_ru' => fake()->sentence(),
            'seo_title_en' => fake()->sentence(),
            'seo_title_uk' => fake()->sentence(),
            'seo_h1_ru' => fake()->sentence(),
            'seo_h1_en' => fake()->sentence(),
            'seo_h1_uk' => fake()->sentence(),
            'seo_desc_ru' => fake()->text(200),
            'seo_desc_en' => fake()->text(200),
            'seo_desc_uk' => fake()->text(200),
            'seo_keywords_ru' => implode(', ', fake()->words(5)),
            'seo_keywords_en' => implode(', ', fake()->words(5)),
            'seo_keywords_uk' => implode(', ', fake()->words(5)),
            'seo_text_ru' => fake()->paragraph(2, true),
            'seo_text_en' => fake()->paragraph(2, true),
            'seo_text_uk' => fake()->paragraph(2, true),
            'image' => 'https://picsum.photos/640/480?random=' . rand(1, 10000),
            'seo_image' => 'https://picsum.photos/640/480?blur&random=' . rand(1, 10000),
            'show_on_site' => fake()->boolean(80),
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function ($article) {
            $services = Service::inRandomOrder()->take(rand(1, 3))->pluck('id');
            $tags = Tag::inRandomOrder()->take(rand(1, 5))->pluck('id');
            $works = Work::inRandomOrder()->take(rand(0, 2))->pluck('id');

            $article->services()->attach($services);
            $article->tags()->attach($tags);
            $article->cases()->attach($works);
        });
    }
}
