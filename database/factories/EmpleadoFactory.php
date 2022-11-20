<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *    
     *
     * @return array<string, mixed>
     */
    /*$table->string('Nombre');
           *$table->string('Apellido');
            $table->string('Identidad');
            $table->double('Salario');
            $table->integer('Edad');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->string('Genero');
            $table->string('Cargo');
            */
    public function definition()
    {
        return [
            'Nombre'=> fake()->firstName(),
            'Apellido'=> fake()->lastName(),
            'Identidad'=> fake()->numerify('####-').fake()->numberBetween(1980,2005).fake()->numerify('-#####'),
            'Salario'=> fake()->numberBetween(15000, 30000),
            'Edad'=> fake()->numberBetween(17,80),
            'Direccion'=> fake()->address(),
            'Telefono'=> fake()->PhoneNumber(),
            'Cargo'=> fake()->jobTitle(),


        ];
    }

}
