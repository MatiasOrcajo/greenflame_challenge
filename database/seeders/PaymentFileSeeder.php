<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaymentFile;

class PaymentFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentFile::factory()->count(20)->create();
    }
}
