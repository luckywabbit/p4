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
		
	
		$addons_for_checkboxes = \App\Addon::getAddonsForCheckboxes();
		
		$addons_of_user_for_checkboxes = \App\Addon::getAddonsOfUserForCheckboxes();

		
		
		$addons_for_this_product = [];
		

		
		return view('product.product')
            ->with('user',$user)
			->with('product',$product)
			
			->with('addons_for_checkboxes',$addons_for_checkboxes)

            ->with('addons_of_user_for_checkboxes',$addons_of_user_for_checkboxes);


	


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

		 
		$user->addons()->sync($addons);

        $user->save();
		 
		//\Session::flash('message','Your changes were saved.');
        return redirect('/product');
	
		return 'product edit';

		
		


    }
	

	
	
	
}#End class ProductController extends BaseController
