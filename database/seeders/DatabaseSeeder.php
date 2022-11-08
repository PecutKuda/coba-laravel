<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::factory(3)->create();

       //User::factory()->create([
       //      'name' => 'Test User',
       //      'email' => 'test@example.com',
       //]);

//        User::create([
//            'name' => 'Elliot Lie',
//            'email' => 'elliotlie@gmail.com',
//            'password' => bcrypt('12345')
//        ]);
//        User::create([
//            'name' => 'Admin',
//            'email' => 'mimin@gmail.com',
//            'password' => bcrypt('56789')
//        ]);

        Category::create([
            'name' => 'Web Programming',
           'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
    }
}
