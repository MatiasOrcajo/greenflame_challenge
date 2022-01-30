<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('iata_code');
            $table->string('number')->nullable();
            $table->unsignedBigInteger('voucher_status_id');
            $table->foreign('voucher_status_id')->references('id')->on('voucher_status');
            $table->integer('voucher_sub_status_id')->nullable();
            $table->unsignedBigInteger('payment_file_id')->nullable();
            $table->foreign('payment_file_id')->references('id')->on('payment_files');
            $table->tinyInteger('past_due');
            $table->string('account');
            $table->float('booking_base_rate');
            $table->float('booking_taxes');
            $table->float('booking_total');
            $table->float('gross_amount');
            $table->float('gsa_amount');
            $table->float('abg_amount');
            $table->float('gsa_comission_rate');
            $table->tinyInteger('gsa_taxes_included');
            $table->float('gsa_comission_amount');
            $table->float('agency_comission_rate')->nullable();
            $table->tinyInteger('agency_taxes_included')->nullable();
            $table->float('agency_comission_amount')->nullable();
            $table->float('abg_net_amount');
            $table->date('issue_date');
            $table->string('agency_file_number')->nullable();
            $table->integer('net_rate');
            $table->tinyInteger('manual_voucher');
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
        Schema::dropIfExists('vouchers');
    }
}
