<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $users = User::all();

        if (count($users) === 0){

        	$name = 'test';
        	$email = 'test@gmail.com';
        	$password = Hash::make('secret');

        	$user = New User;

        	$user->name = $name;
        	$user->email = $email;
        	$user->password = $password;

        	$user->save();

        }
    }
}
