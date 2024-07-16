<?php

namespace Database\Seeders;

use App\Models\Cafe;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Dorm;
use App\Models\User;
use App\Models\Admin;
use App\Models\Field;
use App\Models\Place;
use App\Models\Campus;
use App\Models\Course;
use App\Models\Building;
use App\Models\Class_Class;
use App\Models\Departement;
use App\Models\Parent_Parent;
use App\Models\Student;
use App\Models\User_Place;
use App\Models\UserProfile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Place::factory(7)->create();
        Building::factory(50)->create();
        Campus::factory(10)->create();
        Departement::factory(50)->create();
        Field::factory(150)->create();
        Course::factory(200)->create();
        Dorm::factory(30)->create();
        Class_Class::factory(50)->create();
        Cafe::factory(18)->create();
        User::factory(101)->create();
        UserProfile::factory(101)->create();
        Admin::factory(1)->create();
        Parent_Parent::factory(50)->create();
        Student::factory(50)->create();
        User_Place::factory(10000)->create();
    }
}
