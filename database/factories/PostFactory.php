<?php

namespace Database\Factories;

use App\Models\User;
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
            'tytul' => fake('pl_PL')->realTextBetween(15,40),
            //'autor' => fake('pl_PL')->firstName().' '.fake('pl_PL')->lastName(),
            //'email' => fake('pl_PL')->freeEmail(),
            'tresc' => fake('pl_PL')->realTextBetween(200,500),
            'created_at' => fake()->dateTime(),
            //'user_id' => User::inRandomOrder(null)->value('id') ,
            'user_id' => User::factory(),
        ];
    }
}
