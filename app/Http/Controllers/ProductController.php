<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;




class ProductController extends Controller
{
    /**
     * Responds to requests to /product
     */
    public function getProductIndex(Request $request)
    {
		
		//$product = \App\Product::getProduct();

        //return view('books.index')->with('books',$books);
		
		//return view('product.product')->with('product',$product);;
		
		//$products = \App\Product::where('product_id', '=',\Auth::id())->get();
		
		$user = \App\User::where('id', '=',\Auth::id())->get();
		
		 //$user_product = $user_id[user_product_id] ;
		 
		 
		 
		// $products = \App\Product::where('product_id', '=', 3 )->get();
		 
		 
		 
		//$products = \App\Product::where('id', '=', 2)->get();
		
		//return \App\Book::with('author')->where('user_id', '=',\Auth::id())->orderBy('id','desc')->get();
		
		return view('product.product')->with('user',$user);;	
	


    }#End getProductIndex()
	
	
    public function getProductEdit(Request $request)
    {
		

		
		return view('product.edit');
		
	}
	
/*	
	
	    public function getProductHomeIndex(Request $request)
    {
		
		//return redirect()->action('getProductIndex');
		

		
	}*/
			
	
	
	
}#End class ProductController extends BaseController
