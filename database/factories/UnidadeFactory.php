<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unidade>
 */
class UnidadeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'unidade' => $this->faker->unique()->randomElement(['kg', 'g', 'mg', 't', 'lb', 'oz']),
            'descricao' => $this->faker->unique()->randomElement([
                'Quilograma',
                'Grama',
                'Miligrama',
                'Tonelada',
                'Libra',
                'Onça'
            ]),
        ];
    }
}
