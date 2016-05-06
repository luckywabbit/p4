<?php

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
	
			# Make a Primary, Auto-Incrementing field.
			$table->increments('id');
	
			# This generates two columns: `created_at` and `updated_at` to
			$table->timestamps();
	
			#Product fields
			$table->string('product_name');
			$table->string('product_description');
			$table->float('product_price');
			$table->integer('product_id');
	
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
