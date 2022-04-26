<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tienda>
 */
class TiendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'marca' => $this->faker->text(15),
            'sexo' => $this->faker->text(15),
            'color' => $this->faker->text(15),
            'talla' => $this->faker->text(15),
            'precio' => $this->faker->text(15),
        ];
    }
}
