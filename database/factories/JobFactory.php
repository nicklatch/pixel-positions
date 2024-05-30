<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => '$' . fake()->randomElements(['30', '50', '55', '70', '84', '100', '155', '145', '185', '205', '1,500'])[0] . ",000 USD",
            'location' => fake()->randomElements(['Remote', 'On-Site', 'Hybrid']),
            'schedule' => fake()->randomElements(['Full Time', 'Part Time']),
            'url' => fake()->url(),
            'featured' => fake()->boolean(chanceOfGettingTrue: 1),
        ];
    }
}
