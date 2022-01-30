<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id"=>mt_rand(1, 50),
            "organization_id"=>mt_rand(1, 4),
            "payment_file_status_id"=>mt_rand(1, 20),
            "company_id"=>mt_rand(1, 50),
            "cycle_start"=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            "cycle_end"=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            "account"=>$this->faker->word,
        ];
    }
}
