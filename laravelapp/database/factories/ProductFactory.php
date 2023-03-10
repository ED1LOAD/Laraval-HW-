<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = User::all()->pluck('id')->toArray();

        return [
            'name' => $this->faker->name,
            'article' => $this->faker->randomNumber(8),
            'price' => $this->faker->randomFloat(2, 1000,10000),
            'description' => $this->faker->boolean ? $this->faker->text :null,
            'user_id' => $this->faker->randomElement($users),
        ];
    }
}
