<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'image' => 'blog-images/default.png',
            'body' => collect($this->faker->paragraphs(mt_rand(5,10)))
                     ->map(fn($p) => "$p")
                     ->implode(''),
            'writerId' => mt_rand(1,1),
            'kategoriId' => mt_rand(1,1),
         ];
    }
}
