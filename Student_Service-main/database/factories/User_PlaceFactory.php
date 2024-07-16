<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Place;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User_Place>
 */
class User_PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::pluck("id");
        $place = Place::pluck("id");
        return [
            "user_id"=>fake()->randomElement($user),
            "place_id"=>fake()->randomElement($place)
        ];
    }
}
