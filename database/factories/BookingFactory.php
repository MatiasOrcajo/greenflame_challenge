<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->firstName($gender = null),
            "last_name"=>$this->faker->lastName,
            "age"=>mt_rand(18, 99),
            "number"=>$this->faker->randomNumber,
            "company_id"=>mt_rand(1, 4),
            "manual_voucher"=>mt_rand(0, 1),
            "issue_date"=>$this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
