<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->randomElement(['LT Rental Car Division', 'Viajes Alkasa', 'Rentas y Servicios', 'LQ Representaciones']),
            "country_id"=>$this->faker->randomDigit,
            "state"=>$this->faker->state,
            "city"=>$this->faker->city,
            "zipcode"=>$this->faker->randomNumber,
            "address"=>$this->faker->address,
            "booking_allowed"=>mt_rand(0, 1),
            "voucher_allowed"=>mt_rand(0, 1),
            "net_rates"=>mt_rand(0, 1),
            "active"=>mt_rand(0, 1),
            "promos_active"=>mt_rand(0, 1),
            "notify_past_due"=>mt_rand(0, 1),
        ];
    }
}
