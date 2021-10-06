<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		 Role::create([
		       'name' => 'super admin',
	           'display_name' => 'super_admin', // optional
	           'description' => 'User is the owner of a given project', // optional
		]);


	    Role::create([
		       'name' => 'admin',
		       'display_name' => 'Admin', // optional
		       'description' => 'admin is allowed ', // optional
		]);


		 Role::create([
	           'name' => 'user',
 		       'display_name' => 'User', // optional
		       'description' => 'User is allowed to manage and edit other users', // optional
		]);
    }// end of run 
}// end of seeder 
