<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Street;

class AdminController extends Controller
{
    

	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

    	$users = User::all();

        $streets = Street::all();

    	return view('admin.index', compact('users', 'streets'));
    }

    public function show($id)
    {

    	$user = User::find($id);

    	return view('admin.show', compact('user'));
    }

    public function store(Request $request)
    {

    	$validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',

    ]);

    	$newpassword = Hash::make($request->password);

    	$user = New User;

    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = $newpassword;

    	$user->save();


    	return redirect()->action('AdminController@index');
    }

    public function destroy($id)
    {

    	$users = User::all();

        if (count($users) >= 2) {

        $user = User::find($id);

    	$user->delete();

        }

    	return redirect()->action('AdminController@index');
    }

    public function streets()
    {

        $checkstreets = Street::all();

        if (count($checkstreets) === 0){

        $streetsname = ['Ålagränd', 'Abborrgränd', 'Mörtgränd'];

        foreach ($streetsname as $streetname){

            $street = New Street;

            $street->name = $streetname;
            $street->contact = 'Ange namn senare';
            $street->save();

        }


        }

        return redirect()->action('AdminController@index');
    }


}
