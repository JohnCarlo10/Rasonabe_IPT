<?php

namespace Database\Factories;

use App\Models\Teacher;
use App\Models\Course; 
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'teacher_id' => $this->faker->randomElement(Teacher::pluck('id')),
            'title' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }
}
