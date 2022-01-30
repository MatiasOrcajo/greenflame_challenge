<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('source_id')->nullable();
            $table->string('name');
            $table->string('last_name');
            $table->char('guid')->nullable();
            $table->string('age');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('number');
            $table->integer('company_id')->unsigned();
            $table->text('data_serialized')->nullable();
            $table->text('params_serialized')->nullable();
            $table->text('response_serialized')->nullable();
            $table->string('wizard_number')->nullable();
            $table->string('discount_number')->nullable();
            $table->string('coupon')->nullable();
            $table->string('air_company')->nullable();
            $table->string('flight_number')->nullable();
            $table->string('frequent_flyer_program')->nullable();
            $table->string('frequent_flyer_membership')->nullable();
            $table->string('travel_agency')->nullable();
            $table->string('travel_agency_email')->nullable();
            $table->string('travel_agency_reward')->nullable();
            $table->string('car_specs')->nullable();
            $table->string('card_code')->nullable();
            $table->string('car_group')->nullable();
            $table->string('car_image')->nullable();
            $table->string('car_name')->nullable();
            $table->string('car_type')->nullable();
            $table->string('iata')->nullable();
            $table->string('id_landing')->nullable();
            $table->string('name_landing')->nullable();
            $table->string('vip_type')->nullable();
            $table->string('pickup_date')->nullable();
            $table->string('dropoff_date')->nullable();
            $table->string('pickup_time')->nullable();
            $table->string('rate')->nullable();
            $table->float('base_rate')->nullable();
            $table->float('base_rate_with_taxes')->nullable();
            $table->float('taxes_total')->nullable();
            $table->float('equipment_total')->nullable();
            $table->float('estimated_total_amount')->nullable();
            $table->text('taxes')->nullable();
            $table->tinyInteger('manual_voucher');
            $table->date('issue_date'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
