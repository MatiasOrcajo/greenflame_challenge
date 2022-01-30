<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaymentFileStatus;

class PaymentFileStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentFileStatus::factory()->count(20)->create();
    }
}
