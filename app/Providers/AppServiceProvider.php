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
        //
		
		
		
		view()->composer('layouts.master', function($view){
				
				$productID= "";
				$bodyClass="";

				
				//Check if logged in
				if(\Auth::check()){
					
					//eager loading with products?
					
					$user = \App\User::where('id', '=',\Auth::id())->get();
				
					foreach($user as $userInfo) {
						$productID = $userInfo->product_id;
					}

					$product = \App\Product::where('id', '=',$productID)->get();
					
						foreach($product as $productAttr) {
							$productName = $productAttr->product_name;
						}

						$bodyClass =$productName;
				}

			
				$view->with('bodyClass', $bodyClass);
	
			
			});
		
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
