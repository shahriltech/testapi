<?php

use Illuminate\Database\Seeder;
use App\User_information;

class UsersInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++) { 
	    		User_information::create([
	            'firstname' => 'John',
	            'lastname' => 'Doe',
	            'address' => 'Selangor'
	        ]);
    	}
    }
}
