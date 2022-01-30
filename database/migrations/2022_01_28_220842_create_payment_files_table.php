<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('payment_file_status_id');
            $table->foreign('payment_file_status_id')->references('id')->on('payment_file_status')->onDelete('cascade');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->date('cycle_start');
            $table->date('cycle_end');
            $table->string('account', 50);
            $table->string('iata', 50)->nullable();
            $table->integer('vouchers_count')->nullable();
            $table->float('gross_amount', 15, 2)->nullable();
            $table->float('net_amount', 15, 2)->nullable();
            $table->integer('abg_user_id')->nullable();
            $table->string('comments', 1000);
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
        Schema::dropIfExists('payment_files');
    }
}
