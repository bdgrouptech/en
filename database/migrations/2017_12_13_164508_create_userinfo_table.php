<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uname');
            $table->string('email');
            $table->string('fname');
            $table->string('lname');
            $table->string('gender');
            $table->string('birthdate');
            $table->string('address');
            $table->string('phone');
            $table->string('userfile');
            $table->string('paymenttype');
            $table->string('hname');
            $table->string('cardnumber');
            $table->string('cvc');
            $table->string('expirydate');
            $table->string('user_id');
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
        //
    }
}
