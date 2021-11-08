<?php

namespace Database\Factories;

use App\Models\canton;
use Illuminate\Database\Eloquent\Factories\Factory;

class CantonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = canton::class;

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
