<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
     public function users() {
        return $this->belongsToMany('\App\User')->withTimestamps();
		
		
		//$userAddons = $this->users();
    }
	
	
	    public static function getAddonsForCheckboxes() {

        $addons = \App\Addon::orderBy('addon_name','ASC')->get();

		
		
		//dump($addons);
		

	
	//return $userAddons;
		
		//$addons = \App\Addon::orderBy('addon_name','ASC')->get();
		
		
		
		
		//$userAddons = \App\Addon::where('user_id', '=',$userID)->get();
		
		//return $addons;
		
		//dump($userID);

        $addons_for_checkboxes = [];

        foreach($addons as $addon) {
            $addons_for_checkboxes[$addon['id']] = $addon['addon_name'];
        }

        return $addons_for_checkboxes;
	   
	   //return $userID;

    }
	
	

	 public static function getAddonsOfUserForCheckboxes() {
		 
		$addonsUser = user::find(\Auth::id());
		
		
		$userAddons = [];
			
		foreach ($addonsUser->addons as $user) {
    		$addonID= $user->pivot->addon_id;
			
			$userAddons[] += $addonID;
		
			//dump($addonID);
			//dump($addonID);
		}
		


 	//dump($userAddons);
	
	return $userAddons;
		 
		 
		 
/*	
        $addons = \App\Addon::orderBy('addon_id','ASC')->get();

        $addons_for_checkboxes = [];

        foreach($addons as $addon) {
            $addons_for_checkboxes[$addon['id']] = $addon['name'];
        }

        return $addons_for_checkboxes;
*/
    }
	
	
	
	
	
	
}
