<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CompanySeeder::class);
        $this->call(PaymentFileStatusSeeder::class);
        $this->call(OrganizationSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(VoucherStatusSeeder::class);
        $this->call(BookingSeeder::class);
        $this->call(VoucherSeeder::class);
        $this->call(PaymentFileSeeder::class);
    }
}
