<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projeto>
 */
class ProjetoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome_projeto' => $this->faker->company,
            'email_responsavel' => $this->faker->freeEmail,
            'endereco' => $this->faker->streetName,
            'complemento'=> $this->faker->streetAddress,
            'estado' => $this->faker->state,
            'cidade' => $this->faker->city,
            'cep' => $this->faker->postcode,
            'descricao' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'url' => $this->faker->url,
            'photo' => $this->faker->imageUrl($width = 640, $height = 480)
        ];
    }
}
