<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;
use App\Models\Collection;

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
            'id' => fake()->randomNumber(),
            'title' => fake()->title(),
            'content' => fake()->sentence(),
            'collection_id' => (Collection::count() > 0) ? Collection::first()->id : null,
            'type' => Post::POST_TYPE_TEXT,
            'user_id' => User::first()->id,
            'order' => Post::where('collection_id', null)->count()
        ];
    }
}
