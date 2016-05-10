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
		
		
		$user = \App\User::where('id', '=',\Auth::id())->get();

		
		$userID =	\Auth::id();
		
		$productID= '';
		
		
		foreach($user as $userInfo) {
           $productID = $userInfo->product_id;
        }
		
		
		$product = \App\Product::where('id', '=',$productID)->get();
		
		
		//$addons_user = \App\Addon::where('user_id', '=',\Auth::id())->orderBy('id','desc')->get();
		
		//dump($product);
		
		// return \App\Book::with('author')->where('user_id', '=',\Auth::id())->orderBy('id','desc')->get();
		
		//dump($product);
		//dump($user);
		//dump($userID);
		
		//$userAddons = \App\Addon::where('user_id', '=',$userID)->get();;
		
		//dump($userAddons);
		
	
		$addons_for_checkboxes = \App\Addon::getAddonsForCheckboxes();
		
		$addons_of_user_for_checkboxes = \App\Addon::getAddonsOfUserForCheckboxes();
		
		
		
		//dump($addons_for_checkboxes);
		
		//$userAddons = \App\Addon::where('user_id', 'LIKE', '$userID')->get();;
		//dump($userAddons);
		
		
		$addons_for_this_product = [];
		
/*		
			foreach($user->addons as $addon){
			
			
			}*/
		
		
		//$addons_for_this_product = $book->getTagsForThisBook();


/*	
		foreach($userID->addons_id as $addon){
			$addons_for_this_product[] = $addon->id;
			
			}
			
*/
		
		//dump($addons_for_checkboxes);
		
		return view('product.product')
            ->with('user',$user)
			->with('product',$product)
			
			->with('addons_for_checkboxes',$addons_for_checkboxes)

            ->with('addons_of_user_for_checkboxes',$addons_of_user_for_checkboxes);
           // ->with('addons_for_this_product',$addons_for_this_product);


		
		//$product = \App\Product::getProduct();

        //return view('books.index')->with('books',$books);
		
		//return view('product.product')->with('product',$product);;
		
		//$products = \App\Product::where('product_id', '=',\Auth::id())->get();
		

		
		 //$user_product = $user_id[user_product_id] ;
		 
		 
		 
		// $products = \App\Product::where('product_id', '=', 3 )->get();
		 
		 
		 
		//$products = \App\Product::where('id', '=', 2)->get();
		
		//return \App\Book::with('author')->where('user_id', '=',\Auth::id())->orderBy('id','desc')->get();
		
		
	


    }#End getProductIndex()
	
	
	
	
	
	
	public function postProductEdit(Request $request) {
		
	
		//User ID passed from addon form on /products
		//$user = $request->input('id');
		$user = \App\User::find($request->input('id'));
		
		
		# If there were addons selected...
        if($request->input('addons')) {
            	//addon ID's passed from addon form on /products
				$addons = $request->input('addons');
        }
		
        # If there were no tags selected (i.e. no tags in the request)
        # default to an empty array of tags
        else {
            $addons = [];
        }

	
		//dump($addons);
		//dump($user);
		 
		$user->addons()->sync($addons);

        $user->save();
		 
		//\Session::flash('message','Your changes were saved.');
        return redirect('/product');
		 
		 
/*

        $book->tags()->sync($tags);

        $book->save();

        \Session::flash('message','Your changes were saved.');
        return redirect('/book/edit/'.$request->id);
		 
		 */
		 
		 
		 
		
		return 'product edit';
		
		//return view('product.edit');
		
		
		
/*
        $messages = [
            'not_in' => 'You have to choose an author.',
        ];

        $this->validate($request,[
            'title' => 'required|min:3',
            'published' => 'required|min:4',
            'cover' => 'required|url',
            'purchase_link' => 'required|url',
            'author_id' => 'not_in:0'
        ],$messages);*/
/*
        $book = \App\Book::find($request->id);

        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->cover = $request->cover;
        $book->published = $request->published;
        $book->purchase_link = $request->purchase_link;

        # If there were tags selected...
        if($request->tags) {
            $tags = $request->tags;
        }
        # If there were no tags selected (i.e. no tags in the request)
        # default to an empty array of tags
        else {
            $tags = [];
        }

        $book->tags()->sync($tags);

        $book->save();

        \Session::flash('message','Your changes were saved.');
        return redirect('/book/edit/'.$request->id);*/

    }
	

	
	
	
}#End class ProductController extends BaseController
