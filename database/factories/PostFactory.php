<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;
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
    public function definition(): array
    {

        return [

            'title'=> $this->faker->words(5, true),
            'caption'=> $this->faker->sentence(5),
            'image'=>$this->faker->image,
            "user_id" => User::inRandomOrder()->first(),
        ];
    }
}
