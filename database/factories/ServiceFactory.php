<?php

namespace Database\Factories;

use App\Models\Service;
use App\Enums\ServiceCategoryEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    protected $model = \App\Models\Service::class;
    public function definition(): array
    {
        return [
        'name_ru' => fake()->sentence(),
        'name_en' => fake()->sentence(),
        'name_uk' => fake()->sentence(),
        'category' => array_map(
    fn($enum) => $enum->value,
    fake()->randomElements(ServiceCategoryEnum::cases(), rand(1, 3))),
        'faq_on_site' => fake()->boolean(80),
        'show_on_site' => fake()->boolean(80),
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
        'seo_image' => 'https://picsum.photos/640/480?blur&random=' . rand(1, 10000),
        ];
    }
}
