<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'names'         => fake()->name(),
            'company'       => fake()->company(),
            'phone_number'  => fake()->phoneNumber(),
            'company_email' => fake()->email(),
        ];
    }
}
