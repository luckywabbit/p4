<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('products')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'product_name' => 'Bronze',      
            'product_id' => 1,
			'product_price' => 49.95,
            'product_description' => 'Bronze Lorum Ipsum',
            
      
	    ]);
		
		
       DB::table('products')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'product_name' => 'Silver',      
            'product_id' => 2,
			'product_price' => 99.95,
            'product_description' => 'Silver Lorum Ipsum',
            
      
	    ]);		

       DB::table('products')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'product_name' => 'Gold',      
            'product_id' => 3,
			'product_price' => 149.95,
            'product_description' => 'Gold Lorum Ipsum',
            
      
	    ]);


       DB::table('products')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'product_name' => 'Platinum',      
            'product_id' => 4,
			'product_price' => 199.95,
            'product_description' => 'Platinum Lorum Ipsum',
            
      
	    ]);
		

    
	
	}//End run()
	
	
	
}//End ProductsTableSeeder
