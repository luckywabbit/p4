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
			'product_price' => 49.95,
            'product_description' => 'As a Bronze level member you are saying to the world, here I am. However could you be saying more? Perhaps you should consider a Silver membership from our shop. Or perhaps a few addons to make that Bronze even better.',
            
      
	    ]);
		
		
       DB::table('products')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'product_name' => 'Silver',      
			'product_price' => 99.95,
            'product_description' => 'A Silver level member... right this way, no need to stand in line for you.
You\'ve arrived. However could you be achieving more? Perhaps you should consider a Gold membership from our shop. Or perhaps a few addons to make that Silver truly shine.',
            
      
	    ]);		

       DB::table('products')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'product_name' => 'Gold',      
			'product_price' => 149.95,
            'product_description' => 'A Gold member... very prestigious indeed, nothing but the finest for you I can see. I hope those Bronze and Silver members didn\'t bother you. Although someone with your clear eye for the finer things in life certainly never stops wanting the very best. Have you considered a Platinum membership from our shop. Or perhaps a few addons to accessorize all that lovely gold.',
            
      
	    ]);


       DB::table('products')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'product_name' => 'Platinum',      
			'product_price' => 199.95,
            'product_description' => 'A Platinum member... the most exclusive of the exclusive.
Please let our staff know if there is anything we may do to assist you.  We are open 24 hours a day for our Platinum members should you need anything. Having achieved such status, it\'s clear you understand it is the journey not the finish line.Perhaps you might care to downgrade your membership in our shop so that you might enjoy the thrill of the journey again. Or perhaps a few addons to give that Platinum the polish it deserves.',
            
      
	    ]);
		

    
	
	}//End run()
	
	
	
}//End ProductsTableSeeder
