<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

use Faker\Factory as Faker;

class ShopController extends Controller
{
    /**
     * Responds to requests to /user
     */

    public function getShopIndex(Request $request)
    {
		
		
		$products = \App\Product::all();
		//dump($products->toArray());
		
		foreach($products as $product ){
		//	echo $product['product_description']; //array syntax
			} 
		
		foreach($products as $product ){
			//echo $product->product_description; //object syntax
			} 
		
		//echo $product->first(); //filter on collection instaed of on query
			
			
		//echo $products; //as string JSON format
		
		
		# This shows how you can pass the $products collection
        # to the view to be looped through there
        return view('shop.shop')->with('products',$products);
		
		/*
		//find(product_id);
		 # First get a book to delete
        $product = \App\Product::where('product_name', 'LIKE', '%Diamond%')->first();
        # If we found the book, delete it
        if($product) {
            # Goodbye!
            $product->delete();
            return "Deletion complete; check the database to see if it worked...";
        }
        else {
            return "Can't delete - Product not found.";
        }
		*/
		
		/*
		#// update using Eloquent ORM
        $product = \App\Product::where('product_name', 'LIKE', '%Diamond%')->first();
        # If we found the product, update it
        if($product ) {
            # Give it a different title
            $product ->product_name = 'Uranium Diamond 2';
            # Save the changes
            $product ->save();
            echo "Update complete; check the database to see if your update worked...";
        }
        else {
            echo "Product not found, can't update.";
        }*/
		
		
		
		//read using Eloquent ORM
	/*	$products = \App\Product::all();
        foreach($products as $product) {
            echo $product->product_name.'<br>';
        }*/
		
		
		/*
		//create using model
		        # Instantiate a new Product Model object
        $product = new \App\Product();
        # Set the parameters
        # Note how each parameter corresponds to a field in the table
        $product->product_name = 'Diamond';
        $product->product_description = 'Diamond Lorum Ipsum';
        $product->product_id= 5;
       
        # Invoke the Eloquent save() method
        # This will generate a new row in the `books` table, with the above data
        $product->save();
        echo 'Added: '.$product->product_name;
		
		*/
		
		
		
		
		//create
/*        \DB::table('products')->insert([
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'product_name' => 'Diamond',
            'product_description' => 'Diamond Lorum Ipsum',
            'product_id' => 5
        ]);
        return 'Product Added.';*/
		
		
		//read
		/*$products = \DB::table('products')->get();
		foreach ($products as $product){
			echo $product->product_name;
			}*/
			
		//read with constraints
/*		$products = \DB::table('products')->where('product_name', 'LIKE', '%bronze%')->get();
		foreach ($products as $product){
			echo $product->product_name;
			echo $product->product_description;
			}	
		*/	
		
		//return view('shop.shop');
		
		
	

    }#End getUserIndex()
	
	


}#End class userController extends BaseController
