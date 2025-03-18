<?php

namespace Database\Factories;

use App\Models\Employees;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Companies>
 */
class CompaniesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->company(),
            'email' => fake()->companyEmail(),
            'logo' => 'http://picsum.photos/seed/' . fake()->randomNumber(5) . '/100/100',
            'website_url' => fake()->url,
        ];
    }
}
