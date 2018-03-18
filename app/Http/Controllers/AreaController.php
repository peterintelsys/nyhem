<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use App\Street;
use App\House;
use App\AreaPhoto;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function index()
    {
        $streets = Street::all();

        $alagrand = Area::where('street_id', 1)->orderBy('name', 'asc')->get();

        $abborrgrand = Area::where('street_id', 2)->orderBy('name', 'asc')->get();

        $mortgrand = Area::where('street_id', 3)->orderBy('name', 'asc')->get();

        $areas = Area::all();

        

        return view('area.index', compact('alagrand', 'abborrgrand', 'mortgrand', 'streets', 'areas'));
    }

    public function statusgood()
    {
        $areas = Area::where('status', 1)->get();

        return view('area.good', compact('areas'));
    }

    public function statusnotgood()
    {
        $areas = Area::where('status', 2)->get();

        return view('area.notgood', compact('areas'));
    }

    public function statusbad()
    {
        $areas = Area::where('status', 3)->get();

        return view('area.bad', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'street' => 'required|max:50',
        'name' => 'required|max:50',
        'location' => 'max:255',
        'status' => 'max:255',
        'info' => 'max:655',
        'problems' => 'max:655',
        ]);

        $area = New Area;

        
        $area->name = $request->name;
        $area->info = $request->info;
        $area->street_id = $request->street;
        $area->location = $request->location;
        $area->status = $request->status;
        $area->problems = $request->problems;

        $area->save();

        return redirect()->route('areas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $area = Area::find($id);

        $streets = Street::all();

        $houses = House::where('area_id', $id);

        return view('area.show', compact('area', 'streets', 'houses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $area = Area::findOrFail($id);
        $streets = Street::all();

        return view('area.edit', compact('area', 'streets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
        'street' => 'required|max:50',
        'name' => 'required|max:50',
        'info' => 'max:655',
        'location' => 'max:255',
        'status' => 'max:255',
        'problems' => 'max:655',
        ]);

        $house = Area::find($id);

        
        $house->name = $request->name;
        $house->info = $request->info;
        $house->street_id = $request->street;
        $house->location = $request->location;
        $house->status = $request->status;
        $house->problems = $request->problems;

        $house->save();

        return redirect()->route('areas.show', ['id' => $house->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $houses = House::where('area_id', $id)->get();

        foreach ($houses as $house) {
            $house->area_id = Null;
            $house->save();
        }

        $area = Area::findOrFail($id);

        $photos = AreaPhoto::where('area_id', $id)->delete();


        $area->delete();

        return redirect()->route('areas.index');
    }
}
