<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    protected $model = \App\Models\Tag::class;
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
        ];
    }
}
