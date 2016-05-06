<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddonUserTable extends Migration
{
    public function up()
    {
        Schema::create('addon_user', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();


            $table->integer('user_id')->unsigned();
            $table->integer('addon_id')->unsigned();

            #foreign keys
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('addon_id')->references('id')->on('addons');
        });
    }

    public function down()
    {
		
		
		Schema::drop('addon_user');
		

    }
}
