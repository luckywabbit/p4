<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addons', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('addon_name');
			$table->string('addon_class');
        });
    }

    public function down()
    {
        Schema::drop('addons');
    }
}
