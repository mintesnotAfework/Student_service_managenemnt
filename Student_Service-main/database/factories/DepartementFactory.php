<?php

namespace Database\Factories;

use App\Models\Campus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departement>
 */
class DepartementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departements= [
            "Computer Science",
            "Mathematics",
            "English",
            "History",
            "Physics",
            "Chemistry",
            "Biology",
            "Psychology",
            "Economics",
            "Sociology",
            "Philosophy",
            "Political Science",
            "Linguistics",
            "Anthropology",
            "Art History",
            "Music",
            "Theatre",
            "Film Studies",
            "Engineering",
            "Medicine",
            "Law",
            "Business",
            "Education",
            "Nursing",
            "Environmental Science",
            // Add more departments here (up to 100)
          ];
          $campuses = Campus::pluck("id");
          
        return [
            "name"=>fake()->randomElement($departements),
            "campus_id"=>fake()->randomElement($campuses)
        ];
    }
}
