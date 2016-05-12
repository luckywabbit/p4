<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;


class ShopController extends Controller
{
    /**
     * Responds to requests to /shop
     */

    public function getShopIndex(Request $request)
    {


        $products = \App\Product::all();
        //dump($products->toArray());

        foreach ($products as $product) {
            //	echo $product['product_description']; //array syntax
        }

        foreach ($products as $product) {
            //echo $product->product_description; //object syntax
        }



        # This shows how you can pass the $products collection
        # to the view to be looped through there
        return view('shop.shop')->with('products', $products);


    }#End getUserIndex()

    public function getShopBuy($id)
    {


        echo 'shop buy ' . $id;


        $user = \App\User::where('id', '=', \Auth::id())->first();
        # If we found the user, update the product
        if ($user) {
            # Give it a different title
            $user->product_id = $id;
            # Save the changes
            $user->save();

            \Session::flash('message', 'Your product has been updated.');
            return redirect('/product');

            //echo "Update complete; check the database to see if your update worked...";
        } else {
            echo "Product not found, can't update.";
        }



    }

}#End class userController extends BaseController
