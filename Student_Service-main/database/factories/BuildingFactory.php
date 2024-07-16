<?php

namespace Database\Factories;

use App\Models\Place;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Building>
 */
class BuildingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $places = Place::pluck("id");
        return [
            "name"=>fake()->company(),
            "place_id"=>fake()->randomElement($places),
            "floor_number"=>fake()->numberBetween(0,10),
            "picture"=>"iso.jpg"
        ];
    }
}
