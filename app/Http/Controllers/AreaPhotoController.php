<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\AreaPhoto;

class AreaPhotoController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(Request $request)
    {
        
        $image = $request->file;
        $name = $image->hashName();

        $photo = New AreaPhoto;

        $photo->area_id = $request->id;
        $photo->info = $name;
      

        $photo->save();

        Storage::disk('local')->put('public/photos', $image);

        return redirect()->route('areas.show', ['id' => $photo->area_id]);
    }
}
