<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
     public function users() {
        return $this->belongsToMany('\App\User')->withTimestamps();
;
    }
	
	
	    public static function getAddonsForCheckboxes() {

        $addons = \App\Addon::orderBy('addon_name','ASC')->get();


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

		}
		

	
	return $userAddons;
		 

    }
	
	
	
	
	
	
}
