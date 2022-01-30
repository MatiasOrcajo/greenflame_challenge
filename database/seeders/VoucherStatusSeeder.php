<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VoucherStatus;

class VoucherStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VoucherStatus::factory()->count(50)->create();
    }
}
