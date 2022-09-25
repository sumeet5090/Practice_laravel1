<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'Sumeet Boga',
            'email' => 'sumeetboga@gmail.com',
            'password' => bcrypt('sumeet'),
            'is_admin' => 1,
        ]);
        $category = Category::factory()->create([
            'name' => 'PHP Programming',
            'slug' => 'php-programming',
        ]);
        Post::factory(3)->create([
            'user_id' => $user->id,
            'category_id' => $category->id,
        ]);
    }
}
