<?php

use Illuminate\Database\Seeder;

class AddonUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
 public function run()
    {
        # First, create an array of all the users we want to associate addons with
        # The *key* will be the user name, and the *value* will be an array of addons.
        $users =[
           'Jill' => ['More Cowbell','Less Calories', 'Blacklights','26 Inch Rims','Bluetooth'],
           'Jamal' => ['More Cowbell','Fresh Threads', 'Blacklights','Bluetooth'],
           'Mike' => ['More Cowbell','Less Calories','Fresh Threads', 'Blacklights','26 Inch Rims','Bluetooth'],
		   'Susan' =>['More Cowbell','Bluetooth']
        ];

        # Now loop through the above array, creating a new pivot for each user to addon
        foreach($users as $name => $addons) {

           # First get the user
           $user = \App\user::where('name','like',$name)->first();

           # Now loop through each addon for this user, adding the pivot
           foreach($addons as $addonName) {
               $addon = \App\addon::where('addon_name','LIKE',$addonName)->first();

               # Connect this addon to this user
               # (create a many to many entry)
               $user->addons()->save($addon);

           }

        }
    }
}
