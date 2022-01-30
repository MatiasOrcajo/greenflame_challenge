<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOrganizationIdToPaymentFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment_files', function (Blueprint $table) {
            $table->unsignedBigInteger('organization_id')->after('user_id');
            $table->foreign('organization_id')->references('id')->on('organizations')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_files', function (Blueprint $table) {
            //
        });
    }
}
