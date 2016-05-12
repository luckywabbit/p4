<?php

use Illuminate\Database\Seeder;

class AddonsTableSeeder extends Seeder
{
    public function run()
    {
        $addonNames = ['More Cowbell', 'Less Calories', 'Fresh Threads', 'Blacklights', '26 Inch Rims', 'Bluetooth'];
        $addonClasses = ['cowbell', 'lessCal', 'freshThreads', 'blacklights', 'rims', 'bluetooth'];


        $i = 0;
        foreach ($addonNames as $addonName) {
            $addon = new \App\Addon();
            $addon->addon_name = $addonName;
            $addon->addon_class = $addonClasses[$i];
            $addon->save();
            $i++;
        }


    }
}
