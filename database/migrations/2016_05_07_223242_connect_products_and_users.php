<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectProductsAndUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
/*        Schema::table('users', function (Blueprint $table) {

            # Add a new INT field called `product_id` that has to be unsigned (i.e. positive)
            $table->integer('product_id')->unsigned();

            # This field `product_id` is a foreign key that connects to the `id` field in the `products` table
            $table->foreign('product_id')->references('id')->on('products');

        });*/
    }

    public function down()
    {
/*        Schema::table('users', function (Blueprint $table) {

            # ref: http://laravel.com/docs/migrations#dropping-indexes
            # combine tablename + fk field name + the word "foreign"
			
          $table->dropForeign('users_product_id_foreign');

            $table->dropColumn('product_id');
        });*/
    }
}
