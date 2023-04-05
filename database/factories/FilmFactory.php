<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' =>  $this->faker->slug(),
            'author' => $this->faker->sentence(mt_rand(1, 2)),
            'studio' => $this->faker->sentence(mt_rand(1, 3)),
            'country' => $this->faker->sentence(mt_rand(1, 5)),
            'duration' => $this->faker->randomNumber(5, false),
            'year' => $this->faker->year(),
            'excerpt' => $this->faker->paragraph(),
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5, 10))) . '</p>', 
            'synopsis' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(function ($p) {
                return "<p>$p</p>";
            })->implode(''),
            'user_id' => mt_rand(1, 6),
            'category_id' => mt_rand(1, 13)
        ];
    }
}
