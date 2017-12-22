<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('uploadfile');
            $table->string('thumbnail');
            $table->string('screenshort');
            $table->string('includedfiles');
            $table->string('demourl');
            $table->string('tags');
            $table->string('regprice');
            $table->string('extprice');
            $table->string('msg');
            $table->string('user_id');
            $table->string('active');
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
