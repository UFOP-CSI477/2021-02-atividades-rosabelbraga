<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coleta>
 */
class ColetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'item_id' => Item::inRandomOrder()->first(),
            'entidade_id' => Entidade::inRandomOrder()->first(),
            'quantidade' => $this->faker->randomDigit,
            'data' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
