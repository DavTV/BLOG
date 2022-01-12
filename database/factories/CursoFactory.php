<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class CursoFactory extends Factory
{
    // instanciamos del modelo
    protected $curso = Curso::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // lo creamos fuera para poder llenar .los dos campos con el mismo nombre
        $name = $this->faker->sentence();
        // ponmos los campos a llenar
        return [
            //llena una sentencia
            'name'=>$name,
            'slug'=>Str::slug($name,'-'),
            //llena una descripción
            'description'=>$this->faker->paragraph(),
            //llena una los datos al azar entre los datos que le pasemos en el arreglo
            'categoria'=>$this->faker->randomElement(['desarrollo web','diseño web'])
        ];
    }
}
