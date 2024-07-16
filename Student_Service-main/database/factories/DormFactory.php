<?php

namespace Database\Factories;

use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dorm>
 */
class DormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $buildings = Building::pluck("id");
        return [
            "name"=>fake()->streetName(),
            "floor_number"=>fake()->numberBetween(0,5),
            "building_id"=>fake()->randomElement($buildings)
        ];
    }
}
