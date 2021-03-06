<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
		$this->call(ProductsTableSeeder::class);
		$this->call(UsersTableSeeder::class);
		$this->call(AddonsTableSeeder::class);	
		$this->call(AddonUserTableSeeder::class);	
		
		
		
    }
}
