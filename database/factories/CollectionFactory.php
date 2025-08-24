<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class CollectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => fake()->company(),
            'user_id' => User::first()->id,
            'icon_id' => fake()->numberBetween(101, 108),
            'parent_id' => null
        ];
    }
}
