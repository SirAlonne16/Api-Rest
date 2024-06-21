<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipo>
 */
class EquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $estado=$this->faker->randomElement(['A','L']);
        return [
            //
            'cliente_id'=>Cliente::factory(),
            'cantidad'=>$this->faker->numberBetween(10,20),
            'estado'=>$this->faker->randomElement((['L','O']))


        ];
    }
}
