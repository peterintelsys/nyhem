<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class AdminController extends Controller
{
    

	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

    	$users = User::all();

    	return view('admin.index', compact('users'));
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
}
