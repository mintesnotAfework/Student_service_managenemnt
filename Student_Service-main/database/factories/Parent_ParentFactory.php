<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Parent_Parent>
 */
class Parent_ParentFactory extends Factory
{
    static $parent_id = 2;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id"=>Parent_ParentFactory::$parent_id++
        ];
    }
}
