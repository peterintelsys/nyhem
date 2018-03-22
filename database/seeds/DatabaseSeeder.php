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

        	$newusers = [
            ['name' => 'Peter', 'email' => 'sppaulsson@gmail.com'],
            ['name' => 'Jan-Olof', 'email' => 'jan-olof.jonsson@bjarenet.com'],
            ['name' => 'Filip', 'email' => 'filip.niltorp@gmail.com'],
            ['name' => 'Jennie', 'email' => 'jennieljunggren79@gmail.com'],
            ['name' => 'Lisa', 'email' => 'lisajonkman@outlook.com'],
            ['name' => 'David', 'email' => 'david.nilsson@rsnv.se'],
            ['name' => 'Sigge', 'email' => 'sigge.skalberg@telia.com'],
            ['name' => 'Sune', 'email' => 'sune.ronn@telia.com']
            ];

            
        	$password = Hash::make('nyhem1971');

        	foreach ($newusers as $newuser) {
            
                $buser = New User;

                $buser->name = $newuser['name'];
                $buser->email = $newuser['email'];
                $buser->password = $password;

                $buser->save();
            }

            

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


        $alagarage =[14,15,16,17,18];

        foreach($alagarage as $alagare){

            $alagar = New House;
            $alagar->number = $alagare;
            $alagar->type = 'Garage';
            $alagar->street_id = $alastreet;
            $alagar->save();
        }


        $alahouses = [
        ['number' => 1, 'name' => 'Säven 2', 'garagenbr' => 123, 'garagehouse' => 14, 'contact' => '070-2095685'],
        ['number' => 2, 'name' => 'Säven 3', 'garagenbr' => 124, 'garagehouse' => 18, 'contact' => '0431-18112'],
        ['number' => 3, 'name' => 'Säven 1', 'garagenbr' => 122, 'garagehouse' => 14, 'contact' => '0431-15964'],
        ['number' => 4, 'name' => 'Säven 4', 'garagenbr' => 125, 'garagehouse' => 18, 'contact' => '0431-19934'],
        ['number' => 5, 'name' => 'Säven 11', 'garagenbr' => 121, 'garagehouse' => 14, 'contact' => '0431-14086'],
        ['number' => 6, 'name' => 'Säven 5', 'garagenbr' => 126, 'garagehouse' => 18, 'contact' => '0431-17987'],
        ['number' => 7, 'name' => 'Säven 10', 'garagenbr' => 120, 'garagehouse' => 14, 'contact' => Null],
        ['number' => 8, 'name' => 'Säven 6', 'garagenbr' => 127, 'garagehouse' => 18, 'contact' => '0431-18232'],
        ['number' => 9, 'name' => 'Säven 13', 'garagenbr' => 114, 'garagehouse' => 14, 'contact' => '0733-761890'],
        ['number' => 10, 'name' => 'Säven 7', 'garagenbr' => 117, 'garagehouse' => 18, 'contact' => '0431-15582'],
        ['number' => 11, 'name' => 'Säven 12', 'garagenbr' => 113, 'garagehouse' => 14, 'contact' => '0431-16930'],
        ['number' => 12, 'name' => 'Säven 8', 'garagenbr' => 118, 'garagehouse' => 18, 'contact' => '0431-18955'],
        ['number' => 13, 'name' => 'Säven 21', 'garagenbr' => 112, 'garagehouse' => 14, 'contact' => '0431-453996'],
        ['number' => 14, 'name' => 'Säven 9', 'garagenbr' => 119, 'garagehouse' => 18, 'contact' => '0431-14825'],
        ['number' => 15, 'name' => 'Säven 20', 'garagenbr' => 111, 'garagehouse' => 14, 'contact' => '0431-448688'],
        ['number' => 16, 'name' => 'Säven 14', 'garagenbr' => 115, 'garagehouse' => 17, 'contact' => '0431-15557'],
        ['number' => 17, 'name' => 'Säven 19', 'garagenbr' => 110, 'garagehouse' => 15, 'contact' => '0431-16946'],
        ['number' => 18, 'name' => 'Säven 15', 'garagenbr' => 116, 'garagehouse' => 18, 'contact' => '0431-83795'],
        ['number' => 19, 'name' => 'Säven 25', 'garagenbr' => 103, 'garagehouse' => 15, 'contact' => '0431-16227'],
        ['number' => 20, 'name' => 'Säven 16', 'garagenbr' => 107, 'garagehouse' => 17, 'contact' => '0431-10396'],
        ['number' => 21, 'name' => 'Säven 24', 'garagenbr' => 102, 'garagehouse' => 15, 'contact' => '0431-16114'],
        ['number' => 22, 'name' => 'Säven 17', 'garagenbr' => 108, 'garagehouse' => 17, 'contact' => '0431-12373'],
        ['number' => 23, 'name' => 'Säven 23', 'garagenbr' => 101, 'garagehouse' => 15, 'contact' => '0431-10136'],
        ['number' => 24, 'name' => 'Säven 18', 'garagenbr' => 109, 'garagehouse' => 16, 'contact' => Null],
        ['number' => 25, 'name' => 'Säven 22', 'garagenbr' => 100, 'garagehouse' => 15, 'contact' => '0431-12867'],
        ['number' => 26, 'name' => 'Säven 26', 'garagenbr' => 104, 'garagehouse' => 16, 'contact' => '0431-12150'],
        ['number' => 27, 'name' => 'Säven 31', 'garagenbr' => 99, 'garagehouse' => 15, 'contact' => '0431-19692'],
        ['number' => 28, 'name' => 'Säven 27', 'garagenbr' => 105, 'garagehouse' => 16, 'contact' => '0431-10042'],
        ['number' => 29, 'name' => 'Säven 32', 'garagenbr' => 98, 'garagehouse' => 15, 'contact' => '0431-80898'],
        ['number' => 30, 'name' => 'Säven 28', 'garagenbr' => 106, 'garagehouse' => 16, 'contact' => '0431-82608'],
        ['number' => 31, 'name' => 'Säven 33', 'garagenbr' => 97, 'garagehouse' => 15, 'contact' => '0431-16903'],
        ['number' => 32, 'name' => 'Säven 29', 'garagenbr' => 95, 'garagehouse' => 16, 'contact' => '0431-19062'],
        ['number' => 34, 'name' => 'Säven 30', 'garagenbr' => 96, 'garagehouse' => 16, 'contact' => '0431-12950'],
        ['number' => 36, 'name' => 'Säven 34', 'garagenbr' => 93, 'garagehouse' => 16, 'contact' => '0704-446206'],
        ['number' => 38, 'name' => 'Säven 35', 'garagenbr' => 94, 'garagehouse' => 16, 'contact' => '0763-928983']
        ];

        foreach($alahouses as $alahouse){

            $ala = New House;
            $ala->number = $alahouse['number'];
            $ala->type = 'Villa';
            $ala->name = $alahouse['name'];
            $ala->garagenbr = $alahouse['garagenbr'];
            $ala->garagehouse = $alahouse['garagehouse'];
            $ala->contact = $alahouse['contact'];
            $ala->street_id = $alastreet;
            $ala->save();
        }


        $abbgarage =[9,10,11,12,13];

        foreach($abbgarage as $abbgare){

            $abbgar = New House;
            $abbgar->number = $abbgare;
            $abbgar->type = 'Garage';
            $abbgar->street_id = $abborrstreet;
            $abbgar->save();
        }
        

        $abborrhouses = [
        ['number' => 1, 'name' => 'Vassen 5', 'garagenbr' => 52, 'garagehouse' => 9, 'contact' => '0431-16117'],
        ['number' => 2, 'name' => 'Vassen 13', 'garagenbr' => 65, 'garagehouse' => 13, 'contact' => '0431-17556'],
        ['number' => 3, 'name' => 'Vassen 4', 'garagenbr' => 53, 'garagehouse' => 9, 'contact' => '0431-12905'],
        ['number' => 4, 'name' => 'Vassen 12', 'garagenbr' => 66, 'garagehouse' => 13, 'contact' => '0431-17868'],
        ['number' => 5, 'name' => 'Vassen 3', 'garagenbr' => 54, 'garagehouse' => 9, 'contact' => '0707-918143'],
        ['number' => 6, 'name' => 'Vassen 11', 'garagenbr' => 67, 'garagehouse' => 13, 'contact' => '0431-411013'],
        ['number' => 7, 'name' => 'Vassen 2', 'garagenbr' => 55, 'garagehouse' => 9, 'contact' => '0431-19782'],
        ['number' => 8, 'name' => 'Vassen 23', 'garagenbr' => 75, 'garagehouse' => 13, 'contact' => '0431-83282'],
        ['number' => 9, 'name' => 'Vassen 1', 'garagenbr' => 56, 'garagehouse' => 9, 'contact' => Null],
        ['number' => 10, 'name' => 'Vassen 19', 'garagenbr' => 69, 'garagehouse' => 13, 'contact' => '0766-544333'],
        ['number' => 11, 'name' => 'Vassen 7', 'garagenbr' => 57, 'garagehouse' => 9, 'contact' => '0431-16375'],
        ['number' => 12, 'name' => 'Vassen 20', 'garagenbr' => 68, 'garagehouse' => 13, 'contact' => '0431-12374'],
        ['number' => 13, 'name' => 'Vassen 6', 'garagenbr' => 58, 'garagehouse' => 9, 'contact' => '0431-80477'],
        ['number' => 14, 'name' => 'Vassen 21', 'garagenbr' => 77, 'garagehouse' => 13, 'contact' => Null],
        ['number' => 15, 'name' => 'Vassen 10', 'garagenbr' => 59, 'garagehouse' => 9, 'contact' => '0431-18863'],
        ['number' => 16, 'name' => 'Vassen 22', 'garagenbr' => 76, 'garagehouse' => 13, 'contact' => '0431-80405'],
        ['number' => 17, 'name' => 'Vassen 9', 'garagenbr' => 60, 'garagehouse' => 10, 'contact' => '0709-626594'],
        ['number' => 18, 'name' => 'Vassen 30', 'garagenbr' => 80, 'garagehouse' => 12, 'contact' => '0431-15917'],
        ['number' => 19, 'name' => 'Vassen 8', 'garagenbr' => 61, 'garagehouse' => 9, 'contact' => '0431-452927'],
        ['number' => 20, 'name' => 'Vassen 31', 'garagenbr' => 79, 'garagehouse' => 12, 'contact' => '0431-83303'],
        ['number' => 21, 'name' => 'Vassen 16', 'garagenbr' => 62, 'garagehouse' => 10, 'contact' => '0431-15683'],
        ['number' => 22, 'name' => 'Vassen 32', 'garagenbr' => 78, 'garagehouse' => 12, 'contact' => '0431-18991'],
        ['number' => 23, 'name' => 'Vassen 15', 'garagenbr' => 63, 'garagehouse' => 10, 'contact' => '0431-453671'],
        ['number' => 24, 'name' => 'Vassen 33', 'garagenbr' => 90, 'garagehouse' => 12, 'contact' => '0721-730947'],
        ['number' => 25, 'name' => 'Vassen 14', 'garagenbr' => 64, 'garagehouse' => 10, 'contact' => '0431-26567'],
        ['number' => 26, 'name' => 'Vassen 34', 'garagenbr' => 89, 'garagehouse' => 12, 'contact' => '0703-632200'],
        ['number' => 27, 'name' => 'Vassen 18', 'garagenbr' => 70, 'garagehouse' => 10, 'contact' => '0431-16353'],
        ['number' => 28, 'name' => 'Vassen 40', 'garagenbr' => 92, 'garagehouse' => 12, 'contact' => '0431-19468'],
        ['number' => 29, 'name' => 'Vassen 17', 'garagenbr' => 71, 'garagehouse' => 10, 'contact' => '0431-18468'],
        ['number' => 30, 'name' => 'Vassen 41', 'garagenbr' => 91, 'garagehouse' => 12, 'contact' => Null],
        ['number' => 31, 'name' => 'Vassen 26', 'garagenbr' => 72, 'garagehouse' => 10, 'contact' => '0431-411305'],
        ['number' => 33, 'name' => 'Vassen 25', 'garagenbr' => 73, 'garagehouse' => 10, 'contact' => '0431-12917'],
        ['number' => 35, 'name' => 'Vassen 24', 'garagenbr' => 74, 'garagehouse' => 10, 'contact' => '0431-411913'],
        ['number' => 37, 'name' => 'Vassen 29', 'garagenbr' => 81, 'garagehouse' => 11, 'contact' => '0431-10747'],
        ['number' => 39, 'name' => 'Vassen 28', 'garagenbr' => 82, 'garagehouse' => 11, 'contact' => '0431-18002'],
        ['number' => 41, 'name' => 'Vassen 27', 'garagenbr' => 83, 'garagehouse' => 11, 'contact' => '0431-16860'],
        ['number' => 43, 'name' => 'Vassen 39', 'garagenbr' => 84, 'garagehouse' => 11, 'contact' => '0431-19514'],
        ['number' => 45, 'name' => 'Vassen 38', 'garagenbr' => 85, 'garagehouse' => 11, 'contact' => '0431-16993'],
        ['number' => 47, 'name' => 'Vassen 37', 'garagenbr' => 86, 'garagehouse' => 11, 'contact' => '0431-18795'],
        ['number' => 49, 'name' => 'Vassen 36', 'garagenbr' => 87, 'garagehouse' => 11, 'contact' => '0431-80303'],
        ['number' => 51, 'name' => 'Vassen 35', 'garagenbr' => 88, 'garagehouse' => 12, 'contact' => '0431-15609']
        ];

        foreach($abborrhouses as $abborhouse){  

            $abb = New House;
            $abb->number = $abborhouse['number'];
            $abb->type = 'Villa';
            $abb->name = $abborhouse['name'];
            $abb->garagenbr = $abborhouse['garagenbr'];
            $abb->garagehouse = $abborhouse['garagehouse'];
            $abb->contact = $abborhouse['contact'];
            $abb->street_id = $abborrstreet;

            $abb->save();
        }

        

        $mortgarage =[1,2,3,4,5,6,7,8];

        foreach($mortgarage as $mortgare){

            $mortgar = New House;
            $mortgar->number = $mortgare;
            $mortgar->type = 'Garage';
            $mortgar->street_id = $mortstreet;
            $mortgar->save();
        }


        $morthouses = [
        ['number' => 1, 'name' => 'Kaveldunet 5', 'garagenbr' => 47, 'garagehouse' => 1, 'contact' => '0431-16871'],
        ['number' => 2, 'name' => 'Kaveldunet 6', 'garagenbr' => 46, 'garagehouse' => 8, 'contact' => '0733-530000'],
        ['number' => 3, 'name' => 'Kaveldunet 4', 'garagenbr' => 48, 'garagehouse' => 1, 'contact' => '0431-16118'],
        ['number' => 4, 'name' => 'Kaveldunet 7', 'garagenbr' => 45, 'garagehouse' => 8, 'contact' => '0431-18613'],
        ['number' => 5, 'name' => 'Kaveldunet 3', 'garagenbr' => 49, 'garagehouse' => 1, 'contact' => '0431-16790'],
        ['number' => 6, 'name' => 'Kaveldunet 8', 'garagenbr' => 44, 'garagehouse' => 8, 'contact' => '0709-604460'],
        ['number' => 7, 'name' => 'Kaveldunet 2', 'garagenbr' => 50, 'garagehouse' => 1, 'contact' => '0722-164261'],
        ['number' => 8, 'name' => 'Kaveldunet 9', 'garagenbr' => 43, 'garagehouse' => 8, 'contact' => '0431-15856'],
        ['number' => 9, 'name' => 'Kaveldunet 1', 'garagenbr' => 51, 'garagehouse' => 1, 'contact' => '0708-893707'],
        ['number' => 10, 'name' => 'Kaveldunet 10', 'garagenbr' => 42, 'garagehouse' => 8, 'contact' => '0431-12561'],
        ['number' => 11, 'name' => 'Kaveldunet 13', 'garagenbr' => 39, 'garagehouse' => 1, 'contact' => '0431-410047'],
        ['number' => 12, 'name' => 'Kaveldunet 11', 'garagenbr' => 41, 'garagehouse' => 7, 'contact' => '0431-12688'],
        ['number' => 13, 'name' => 'Kaveldunet 12', 'garagenbr' => 40, 'garagehouse' => 2, 'contact' => '0431-19512'],
        ['number' => 14, 'name' => 'Kaveldunet 17', 'garagenbr' => 35, 'garagehouse' => 7, 'contact' => '0431-18522'],
        ['number' => 15, 'name' => 'Kaveldunet 16', 'garagenbr' => 36, 'garagehouse' => 2, 'contact' => Null],
        ['number' => 16, 'name' => 'Kaveldunet 18', 'garagenbr' => 34, 'garagehouse' => 7, 'contact' => '0431-18998'],
        ['number' => 17, 'name' => 'Kaveldunet 15', 'garagenbr' => 37, 'garagehouse' => 2, 'contact' => '0431-411064'],
        ['number' => 18, 'name' => 'Kaveldunet 19', 'garagenbr' => 33, 'garagehouse' => 7, 'contact' => Null],
        ['number' => 19, 'name' => 'Kaveldunet 14', 'garagenbr' => 38, 'garagehouse' => 2, 'contact' => '0431-17551'],
        ['number' => 20, 'name' => 'Kaveldunet 20', 'garagenbr' => 32, 'garagehouse' => 7, 'contact' => '0431-25633'],
        ['number' => 21, 'name' => 'Kaveldunet 27', 'garagenbr' => 25, 'garagehouse' => 6, 'contact' => '0431-14800'],
        ['number' => 22, 'name' => 'Kaveldunet 21', 'garagenbr' => 31, 'garagehouse' => 7, 'contact' => '0431-80213'],
        ['number' => 23, 'name' => 'Kaveldunet 26', 'garagenbr' => 26, 'garagehouse' => 2, 'contact' => '0431-19215'],
        ['number' => 24, 'name' => 'Kaveldunet 22', 'garagenbr' => 30, 'garagehouse' => 7, 'contact' => '0431-12646'],
        ['number' => 25, 'name' => 'Kaveldunet 25', 'garagenbr' => 27, 'garagehouse' => 2, 'contact' => '0431-16913'],
        ['number' => 26, 'name' => 'Kaveldunet 23', 'garagenbr' => 29, 'garagehouse' => 7, 'contact' => '0431-18666'],
        ['number' => 27, 'name' => 'Kaveldunet 24', 'garagenbr' => 28, 'garagehouse' => 2, 'contact' => '0431-15403'],
        ['number' => 28, 'name' => 'Kaveldunet 31', 'garagenbr' => 21, 'garagehouse' => 6, 'contact' => '0431-14868'],
        ['number' => 29, 'name' => 'Kaveldunet 30', 'garagenbr' => 22, 'garagehouse' => 3, 'contact' => '0431-15183'],
        ['number' => 30, 'name' => 'Kaveldunet 32', 'garagenbr' => 20, 'garagehouse' => 6, 'contact' => '0431-19185'],
        ['number' => 31, 'name' => 'Kaveldunet 29', 'garagenbr' => 23, 'garagehouse' => 3, 'contact' => '0431-15435'],
        ['number' => 32, 'name' => 'Kaveldunet 33', 'garagenbr' => 19, 'garagehouse' => 6, 'contact' => '0709-108563'],
        ['number' => 33, 'name' => 'Kaveldunet 28', 'garagenbr' => 24, 'garagehouse' => 3, 'contact' => '0431-15281'],
        ['number' => 34, 'name' => 'Kaveldunet 34', 'garagenbr' => 18, 'garagehouse' => 6, 'contact' => '0760-158494'],
        ['number' => 35, 'name' => 'Kaveldunet 40', 'garagenbr' => 12, 'garagehouse' => 3, 'contact' => '0431-17606'],
        ['number' => 36, 'name' => 'Kaveldunet 35', 'garagenbr' => 17, 'garagehouse' => 6, 'contact' => '0431-80147'],
        ['number' => 37, 'name' => 'Kaveldunet 39', 'garagenbr' => 13, 'garagehouse' => 3, 'contact' => '0431-25854'],
        ['number' => 38, 'name' => 'Kaveldunet 36', 'garagenbr' => 16, 'garagehouse' => 6, 'contact' => '0768-849960'],
        ['number' => 39, 'name' => 'Kaveldunet 38', 'garagenbr' => 14, 'garagehouse' => 3, 'contact' => '0763-112230'],
        ['number' => 40, 'name' => 'Kaveldunet 37', 'garagenbr' => 15, 'garagehouse' => 6, 'contact' => '0709-742154'],
        ['number' => 41, 'name' => 'Kaveldunet 42', 'garagenbr' => 10, 'garagehouse' => 4, 'contact' => '0767-982859'],
        ['number' => 42, 'name' => 'Kaveldunet 43', 'garagenbr' => 9, 'garagehouse' => 4, 'contact' => '0735-294435'],
        ['number' => 43, 'name' => 'Kaveldunet 41', 'garagenbr' => 11, 'garagehouse' => 4, 'contact' => '0431-80231'],
        ['number' => 44, 'name' => 'Kaveldunet 44', 'garagenbr' => 8, 'garagehouse' => 5, 'contact' => '0431-14653'],
        ['number' => 45, 'name' => 'Kaveldunet 51', 'garagenbr' => 1, 'garagehouse' => 4, 'contact' => '0431-19150'],
        ['number' => 46, 'name' => 'Kaveldunet 45', 'garagenbr' => 7, 'garagehouse' => 5, 'contact' => '0431-16862'],
        ['number' => 47, 'name' => 'Kaveldunet 50', 'garagenbr' => 2, 'garagehouse' => 4, 'contact' => '0431-16644'],
        ['number' => 48, 'name' => 'Kaveldunet 46', 'garagenbr' => 6, 'garagehouse' => 5, 'contact' => '0431-13212'],
        ['number' => 49, 'name' => 'Kaveldunet 49', 'garagenbr' => 3, 'garagehouse' => 4, 'contact' => '0431-13476'],
        ['number' => 50, 'name' => 'Kaveldunet 47', 'garagenbr' => 5, 'garagehouse' => 5, 'contact' => '0431-80562'],
        ['number' => 52, 'name' => 'Kaveldunet 48', 'garagenbr' => 4, 'garagehouse' => 5, 'contact' => '0733-095716']
        ];


        foreach($morthouses as $morthouse){

            $mort = New House;
            $mort->number = $morthouse['number'];
            $mort->type = 'Villa';
            $mort->name = $morthouse['name'];
            $mort->garagenbr = $morthouse['garagenbr'];
            $mort->garagehouse = $morthouse['garagehouse'];
            $mort->contact = $morthouse['contact'];
            $mort->street_id = $mortstreet;

            $mort->save();
        }

        



        }


    }
}
