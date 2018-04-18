<?php

use Illuminate\Database\Seeder;
use App\Roles;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =new \App\User();
        $user->name='User';
        $user->email='User@temp.pl';
        $user->password=bcrypt('user');
        $user->save();
        
        $user =new \App\User();
        $user->name='User1';
        $user->email='User1@temp.pl';
        $user->password=bcrypt('user1');
        $user->save();
    }
}
