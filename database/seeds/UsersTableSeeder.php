<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
	

         $user = \App\User::firstOrCreate(['email' => 'jill@harvard.edu']);
         $user->name = 'Jill';
         $user->email = 'jill@harvard.edu';
         $user->password = \Hash::make('helloworld');
		 $user->product_id = 2;
		 //user_cc  not hashed for Demo purposes
		 //$user->user_cc = \Hash::make(1111);
		 $user->user_cc = 1111;
         $user->save();

         $user = \App\User::firstOrCreate(['email' => 'jamal@harvard.edu']);
         $user->name = 'Jamal';
         $user->email = 'jamal@harvard.edu';
         $user->password = \Hash::make('helloworld');
		 $user->product_id= 4;
		 //user_cc  not hashed for Demo purposes
		 //$user->user_cc = \Hash::make(2222);
		 $user->user_cc = 2222;
         $user->save();
		 
		 $user = \App\User::firstOrCreate(['email' => 'michael@luckywabbit.com']);
         $user->name = 'Mike';
         $user->email = 'michael@luckywabbit.com';
         $user->password = \Hash::make('helloworld');
		 $user->product_id = 1;
		 //user_cc  not hashed for Demo purposes
		 //$user->user_cc = \Hash::make(3333);
		 $user->user_cc = 3333;
         $user->save();

         $user = \App\User::firstOrCreate(['email' => 'dwa15.practice@gmail.com']);
         $user->name = 'Susan';
         $user->email = 'dwa15.practice@gmail.com';
         $user->password = \Hash::make('helloworld');
		 $user->product_id = 3;
		 //user_cc  not hashed for Demo purposes
		 //$user->user_cc = \Hash::make(4444);
		 $user->user_cc = 4444;
         $user->save();
		 
		 
    }
}
