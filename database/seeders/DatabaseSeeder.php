<?php

namespace Database\Seeders;

use App\Models\Film;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Albet Matthew Best Nainggolan',
            'username' => 'matbst',
            'email' => 'mimikripower@gmail.com',
            'password' => bcrypt('password')
        ]);


        // \App\Models\User::factory(10)->create();
        User::factory(5)->create();


        Category::create([
            'name' => 'Action',
            'slug' => 'action'
        ]);

        Category::create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);

        Category::create([
            'name' => 'Horror',
            'slug' => 'horror'
        ]);

        Category::create([
            'name' => 'Comedy',
            'slug' => 'comedy'
        ]);

        Category::create([
            'name' => 'Adventure',
            'slug' => 'adventure'
        ]);

        Category::create([
            'name' => 'Science Fiction',
            'slug' => 'science-fiction'
        ]);

        Category::create([
            'name' => 'Crime',
            'slug' => 'crime'
        ]);

        Category::create([
            'name' => 'Drama',
            'slug' => 'drama'
        ]);

        Category::create([
            'name' => 'Fantasy',
            'slug' => 'fantasy'
        ]);

        Category::create([
            'name' => 'War',
            'slug' => 'war'
        ]);

        Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        Category::create([
            'name' => 'Mystery',
            'slug' => 'mystery'
        ]);

        Category::create([
            'name' => 'Thriller',
            'slug' => 'thriller'
        ]);


        Film::factory(20)->create();
    }
}
