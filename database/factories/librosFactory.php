<?php

namespace Database\Factories;

use App\Models\Libros;
use Illuminate\Database\Eloquent\Factories\Factory;

class librosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Libros::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'paterno' => $this->faker->name(),
            'materno' => $this->faker->name(),
            'sexo' => $this->faker->randomElement(['hombre', 'mujer']),
            'edad' => $this->faker->numberBetween(5, 100),
        ];
    }
}
