<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> User::factory(),
            'category_id'=> Category::factory(),
            'title' => $this->faker->unique()->sentence,
            'slug' => $this->faker->unique()->slug,
            'excerpt' => $this->faker->paragraph,
            'content' => implode(PHP_EOL, $this->faker->paragraphs(10)),
        ];
    }
}
