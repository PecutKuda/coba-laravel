<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => collect($this->faker->paragraphs(mt_rand(5,10)))
                        //mengconvert paragraph kedalam bentuk collection (array), kemudian dilakukan map
                        //map akan menambahkan paragraph di tiap" paragraph yang akan ditambahkan
                        //fn = function, dipakai fn karena menggunakan arrow function
                        ->map(fn($p) => "<p>$p</p>")
                        //dilakukan join dengan implode dengan delimiter ''
                        ->implode(''),
            'user_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,3)
        ];
    }
}
