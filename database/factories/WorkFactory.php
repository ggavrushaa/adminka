<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{
    protected $model = \App\Models\Work::class;
    public function definition(): array
    {
        return [
        'title_uk' => fake()->sentence(),
        'description_uk' => fake()->paragraph(),
        'title_en' => fake()->sentence(),
        'description_en' => fake()->paragraph(),
        'title_ru' => fake()->sentence(),
        'description_ru' => fake()->paragraph(),
        'image' => 'https://picsum.photos/640/480?blur&random=' . rand(1, 10000),
        'video' => 'https://picsum.photos/640/480?blur&random=' . rand(1, 10000),
        'link' => fake()->url(),
        'project_type' => fake()->randomElement(['Mobile App', 'Automatization', 'CRM', 'Website', 'Landing Page', 'Other', 'Game']),
        'show_on_site' => fake()->boolean(80),
        'no_work_page' => fake()->boolean(50),
        'show_in_work_block' => fake()->boolean(70),
        'show_in_footer' => fake()->boolean(60),
        ];
    }
}
