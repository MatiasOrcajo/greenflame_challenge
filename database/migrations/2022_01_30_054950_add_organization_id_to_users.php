<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Constants;

class AddOrganizationIdToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('organization_id')->after('id')->nullable();
            $table->foreign('organization_id')->references('id')->on('organizations')->nullOnDelete();
        });


        // $user = new \App\Models\User;
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
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
