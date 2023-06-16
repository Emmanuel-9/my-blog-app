<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //Generates a fake sentence 
            'title' => $this->faker->sentence,
            //Generates 30 fake paragraphs
            'body' => $this->faker->paragraph(30),
            //Generates a User from factory and extracts id 
            'user_id' => User::factory()
        ];
    }
}
