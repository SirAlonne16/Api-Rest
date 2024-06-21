<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type=$this->faker->randomElement(['I','B']);
        $type=='I' ? $this->faker->name() : $this->faker->company();
        return [
            //
            'nombre'=>'nombre',
            'talla'=>'talla',
            'marca'=>'marca'

        ];
    }
}
