<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fornecedor>
 */
class FornecedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->unique()->numberBetween(1, 15),
            'nome' => fake()->company(),
            'email' => fake()->unique()->companyEmail(),
            'UF' => fake()->countryCode(),
            'site' => fake()->domainName()
        ];
    }
}
