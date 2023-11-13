<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => mt_rand(1,2),
            'user_id' => mt_rand(1,3),
            'title' => fake()->sentence(mt_rand(2,8)),
            'excerpt' => fake()->paragraph(),
            'body' => fake()->paragraph(mt_rand(1, 3))
        ];
    }
}
