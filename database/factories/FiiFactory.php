<?php

namespace Database\Factories;

use App\Models\Fii;
use Illuminate\Database\Eloquent\Factories\Factory;

class FiiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fii::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fii_cod' => $this->faker->name('male'),
            'fii_price' => $this->faker->randomFloat(2,3, 155)
        ];
    }
}
