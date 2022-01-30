<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->randomElement(['Avis', 'Budget']),
            "display_order"=>$this->faker->randomDigit,
            "active"=>mt_rand(0, 1),
        ];
    }
}
