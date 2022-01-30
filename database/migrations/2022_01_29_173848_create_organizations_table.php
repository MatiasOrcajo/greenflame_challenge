<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('country_id')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_code')->nullable();
            $table->string('email_booking')->nullable();
            $table->string('phone')->nullable();
            $table->string('email_voucher')->nullable();
            $table->tinyInteger('booking_allowed');
            $table->tinyInteger('voucher_allowed');
            $table->tinyInteger('net_rates');
            $table->tinyInteger('active');
            $table->tinyInteger('promos_active');
            $table->tinyInteger('notify_past_due');
            $table->float('latitude')->nullable();
            $table->timestamps();
        });


        // $organizations = ['LT Rental Car Division', 'Viajes Alkasa', 'Rentas y Servicios', 'LQ Representaciones'];

        // for($i = 0; $i < count($organizations); $i++)
        // {
        //     $organization = new \App\Models\Organization;
        //     $organization->name = $organizations[$i];
            
        // }
        
        

        // $organization = new \App\Models\User;
        // $user->organization_id = 1;
        // $user->name = 'admin';
        // $user->last_name = 'admin';
        // $user->email = 'admin@admin.com';
        // $user->password =  Hash::make('admin123**');
        // $user->active = Constants::ACTIVE;
        // $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizations');
    }
}
