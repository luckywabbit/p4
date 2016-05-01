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
		
		return view('shop.shop');
		
		
	/*	//validate Request
		$this->validate($request, [
        	'userCount' => 'required|numeric|min:1|max:20'
    	]);
	
		
		// declare variables
        $usersGenerated = [];
        $userGenerated = [];

		// Get requested number of users
        $userCount = $request->input('userCount');

         for ($x = 1; $x <= $userCount; $x++) {
				//Create fake user
                $faker = Faker::create();

				// Create array from user variables
                $userGenerated = array(
                    'Name' => $faker->name,
                    'Email' => $faker->email,
                    'City' => $faker->city,
                    'Member Since' => $faker->year
                );

				//push $userGenerated array into $usersGenerated creating multidimentional array
                array_push($usersGenerated, $userGenerated);
          }// END for loop

			//return user view with $userCount and $usersGenerated array
          return view('user.user', [
                'userCount' => $userCount,
                'usersGenerated' => $usersGenerated
          ]);
*/

    }#End getUserIndex()
	
	


}#End class userController extends BaseController
