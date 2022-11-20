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
    /* 
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Identidad');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->string('Pais');
            $table->string('Ciudad'); */
           
    public function definition()
    {
        return [
            'nombre'=> fake()->firstName(),
            'Apellido'=> fake()->lastName(),
            'Identidad'=> fake()->numerify('####-').fake()->numberBetween(1980,2005).fake()->numerify('-#####'),
            'Direccion'=> fake()->address(),
            'Telefono'=> fake()->PhoneNumber(),
            'Pais'=> fake()->country(),
            'Ciudad'=> fake()->city(),
        ];
    }
}
