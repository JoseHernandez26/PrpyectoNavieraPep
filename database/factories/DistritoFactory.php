<?php

namespace Database\Factories;

use App\Models\distrito;
use Illuminate\Database\Eloquent\Factories\Factory;

class DistritoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = distrito::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->city(),
        ];
    }
}
