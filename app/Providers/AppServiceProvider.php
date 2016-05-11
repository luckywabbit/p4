<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		//-----------
		

			view()->composer('layouts.master', function($view){
				
				//Declare Variables
				$productID= "";
				$bodyClass="";
				
				//Check if logged in
				if(\Auth::check()){
										
					//Get User Coolection
					$userCollection = \App\User::where('id', '=',\Auth::id())->get();
					
					//get  $userProductID from $userCollection
					foreach($userCollection as $userCollectionInfo) {
						$userProductID = $userCollectionInfo->product_id;
					}				
					// returns  1 or 2 or 3 etc
					
					// Get Product collection
					$userProductCollection = \App\Product::where('id', '=',$userProductID)->get();
					
					//Get product_name out of $userProductCollection 
					foreach($userProductCollection as $productAttr) {
						$userProductName = $productAttr->product_name;
					}
					//returns 'Bronze' or 'Silver' or 'Gold' or 'Platinum' etc

					//Set product_name as a class on the page body
				    $bodyProductClass =$userProductName;

					
				
				
					//-----------------------add on classes--------------	

					//Declare Variables
					$addonsNamesOfUser = [];
					
					
					//Get Collection of all available addons from Model
					$addonsCollection = \App\Addon::get();
				
					//dump($addonsCollection );
					
					//Get Addon IDs of user
					$addonIDs_of_user = \App\Addon::getAddonsOfUserForCheckboxes();	
						
					
					foreach($addonIDs_of_user as $addonID_of_user) {
							

						// ($addonID_of_user - 1) corrects allignment with array's zero index						
						$addonClassName= $addonsCollection[($addonID_of_user - 1)]->addon_class;
						
						array_push($addonsNamesOfUser,$addonClassName );

						}
					
					$view->with('bodyProductClass', $bodyProductClass)->with('bodyAddonsClasses', $addonsNamesOfUser);				

				
				
				} //END if (\Auth::check())
				
					
			});//--------END view()->composer

    }// -------END public function boot()



    /**----------------
     *      Register any application services.
     *
     *      @return void
	 *--------------------
     */
	 
	 
    public function register()
    {
        //
    } //END public function register()
}
