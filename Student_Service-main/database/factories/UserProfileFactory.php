<?php

namespace Database\Factories;

use App\Models\UserProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserProfile>
 */
class UserProfileFactory extends Factory
{
    static $id = 1400001;
    static $uid = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "profile"=>"mintesnot.jpg",
            "special_id"=>UserProfileFactory::$id++,
            "full_name"=>fake()->firstName(). " " . fake()->lastName(),
            "birthday"=>fake()->date(),
            "user_id"=>UserProfileFactory::$uid++,
        ];
    }
}
