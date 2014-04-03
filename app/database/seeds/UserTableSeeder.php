<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
    	$role = new Role();
    	$role->name = "Admin";
    	$role->save();

        DB::table('users')->delete();

        $user = new User();
        $user->email = 'admin@codeup.com';
        $user->password = 'adminPass123!';
        $user->first_name = 'Admin';
        $user->last_name = "Codeup";
        $user->role_id = 1;
        $user->save();
    }

}