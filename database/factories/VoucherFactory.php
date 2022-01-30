<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VoucherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "booking_id"=>mt_rand(1, 50),
            "organization_id"=>mt_rand(1, 4),
            "user_id"=>mt_rand(1, 50),
            "company_id"=>mt_rand(1, 50),
            "number"=>$this->faker->ean8,
            "iata_code"=>$this->faker->md5,
            "voucher_status_id"=>mt_rand(1, 50),
            "past_due"=>mt_rand(0, 1),
            "payment_file_id"=>$this->faker->randomElement([1, 5, 3, 4, 15, null]),
            "account"=>$this->faker->swiftBicNumber,
            "booking_base_rate"=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 50),
            "booking_taxes"=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 50),
            "booking_total"=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 50),
            "gross_amount"=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 50),
            "gsa_amount"=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 50),
            "abg_amount"=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 50),
            "gsa_comission_rate"=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 50),
            "gsa_taxes_included"=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 50),
            "gsa_comission_amount"=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 50),
            "abg_net_amount"=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 50),
            "issue_date"=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            "net_rate"=>mt_rand(0, 1),
            "manual_voucher"=>mt_rand(0, 1),
        ];
    }
}
