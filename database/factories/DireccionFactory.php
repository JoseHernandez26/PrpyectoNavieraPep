<?php

namespace Database\Factories;

use App\Models\direccion;
use Illuminate\Database\Eloquent\Factories\Factory;

class DireccionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = direccion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'direccion' => $this->faker->address(),
        ];
    }
}
