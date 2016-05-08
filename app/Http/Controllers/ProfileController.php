<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;



class ProfileController extends Controller
{
    /**
     * Responds to requests to /profile
     */

    public function getProfileIndex(Request $request)
    {
		
		$user = \App\User::where('id', '=',\Auth::id())->get();
		
		
		return view('profile.profile')->with('user',$user);
		
		


    }#End getProfileIndex()
	
	
	
	
	 public function getProfileEdit(Request $request)
    {
		
		
				
		//find(product_id);
		 # First get a book to delete

		 $user = \App\User::where('id', '=',\Auth::id());    
		$user->delete();
		 
		 
  /*      $user = \App\User::where('id', '=',\Auth::id())->get();
        # If we found the book, delete it
        if($user) {
            # Goodbye!
            $user->delete();
            return "Deletion complete; check the database to see if it worked...";
        }
        else {
            return "Can't delete - Product not found.";
        }*/
		
		\Session::flash('message','Account deleted, thank you.');
		return redirect('/');

		
		//return view('auth.login');
		
	}
	

	
	

}#End class ProfileController extends BaseController
