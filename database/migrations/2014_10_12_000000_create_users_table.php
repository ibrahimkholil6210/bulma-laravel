<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('website');
            $table->date('dob');
            $table->string('streetAddress');
            $table->string('streetAddressSecond')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('sex');
            $table->string('bio');
            $table->string('interestedDivision');
            $table->float('salaryAmount');
            $table->string('degree');
            $table->string('experience')->nullable();
            $table->string('designation')->nullable();
            $table->string('cvFileName');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
