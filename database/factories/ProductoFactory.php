<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     /* $table->id();
            $table->string('nombre_producto');
            $table->integer('precio');
            $table->text('descripcion');
            $table->integer('unidades');*/
    public function definition()
    {
        return [
            'nombre_producto'=> fake()->name(),
            'precio'=> fake()->numberBetween(100, 500),
            'descripcion'=> fake()->paragraph(),
            'unidades'=> fake()->numberBetween(1, 10)
        ];
    }
}
