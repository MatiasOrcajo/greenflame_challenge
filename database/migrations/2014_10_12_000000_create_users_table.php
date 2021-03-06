<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Constants;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name')->nullable();
            // saco el unique de email por motivos de ejectuar el factory
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->string('gender')->nullable();
            $table->integer('active')->default(Constants::ACTIVE);
            $table->tinyInteger('terms_and_conditions')->nullable();
            $table->string('language_code')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        $user = new \App\Models\User;
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('admin123');

        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
