<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>fake()->randomElement(User::pluck('id')),
            'course_id'=>fake()->randomElement(Course::pluck('id')),
            'status'=>fake()->randomElement(['Available', 'Occuppied'])
        ];
    }
}
