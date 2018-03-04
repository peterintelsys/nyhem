<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Street;
use App\House;

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

        $streets = Street::all();

        if(count($streets) === 0){

            $newstreets = ['Ålagränd', 'Abborrgränd', 'Mörtgränd'];

            foreach ($newstreets as $newstreet) {

                $mystreet = New Street;

                $mystreet->name = $newstreet;
                $mystreet->save();
            }
        }

        
        $alastreet = 1;
        $abborrstreet = 2;
        $mortstreet = 3;

        $houses = House::all();
        if(count($houses) === 0){

        $alahouses = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,34,
                        36,38];

        foreach($alahouses as $alahouse){

            $ala = New House;
            $ala->number = $alahouse;
            $ala->street_id = $alastreet;
            $ala->save();
        }


        $abborrhouses = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,33,35,
                        37,39,41,43,45,47,49,51];

        foreach($abborrhouses as $abborhouse){  

            $abb = New House;
            $abb->number = $abborhouse;
            $abb->street_id = $abborrstreet;
            $abb->save();
        }

        $morthouses = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,
                        36,37,38,39,41,42,43,44,45,46,47,48,49,50,51];

        foreach($morthouses as $morthouse){

            $mort = New House;
            $mort->number = $morthouse;
            $mort->street_id = $mortstreet;
            $mort->save();
        }



        }


    }
}
