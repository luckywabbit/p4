<?php

use Illuminate\Database\Seeder;

class AddonsTableSeeder extends Seeder
{
    public function run()
    {
       $data = ['More Cowbell','Less Calories','Fresh Threads', 'Blacklights','26 Inch Rims','Bluetooth'];

       foreach($data as $addonName) {
           $addon = new \App\Addon();
           $addon->addon_name = $addonName;
           $addon->save();
       }
   }
}
