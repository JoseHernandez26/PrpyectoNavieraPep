<?php

namespace Database\Factories;

use App\Models\barrio;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarrioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = barrio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
        ];
    }
}
