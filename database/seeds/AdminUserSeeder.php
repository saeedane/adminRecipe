<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          $super_admin =  User::create([
            'name' => 'salim',
            'email' => 'salim@app.com',
            'password' => bcrypt('12345678'),
        ]);

          $user =  User::create([
            'name' => 'user',
            'email' => 'user@app.com',
            'password' => bcrypt('12345678'),
        ]);


        $super_admin->attachRole('super_admin');





    }
}
