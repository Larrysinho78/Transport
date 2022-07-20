<?php

namespace Database\Factories;


use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Res_Adm'       => $this->faker->numberBetween(1,150),
            'Reg_Operador'  => $this->faker->numberBetween(1,150),
            'Categoria'     => $this->faker->randomElement(['Liviano','Pesado']),
            'Operador'      => $this->faker->name,
            'Propietario'   => $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            'Marca'         => $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            'Modelo'        => $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            'Capacidad'     => $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            'Clase'         => $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            'Placa'         => $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            'Rutas_Aut'     => $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            'Fecha_Emision' => $this->faker->dateTime($max = 'now', $timezone = null),
            'Fecha_Inicio'  => $this->faker-> date($format = 'Y-m-d', $min = 'now' , $max = '+1  year'),
            'Fecha_Final'   => $this->faker->date($format = 'Y-m-d', $min = 'now' , $max = '+1  year'),
            'Estado'        => $this->faker->randomElement(['Nuevo','Renovación']),
            'Qr'            => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}

