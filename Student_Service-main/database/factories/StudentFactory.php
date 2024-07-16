<?php

namespace Database\Factories;

use App\Models\Dorm;
use App\Models\Field;
use App\Models\Parent_Parent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    static $id = 52;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $f = Field::pluck("id");
        $d = Dorm::pluck("id");
        $p = Parent_Parent::pluck("id");
        return [
            "user_id" => StudentFactory::$id++,
            "parent_id" => fake()->randomElement($p),
            "dorm_id" => fake()->randomElement($d),
            "field_id" => fake()->randomElement($f)
        ];
    }
}
