<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Street;
use App\House;
use App\Area;

class HouseController extends Controller
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

        $alagrand = House::where('street_id', 1)->where('type', 'Villa')->orderBy('number', 'asc')->get();

        $alagarage = House::where('street_id', 1)->where('type', 'Garage')->orderBy('number', 'asc')->get();

        $abborrgrand = House::where('street_id', 2)->where('type', 'Villa')->orderBy('number', 'asc')->get();

        $abborrgarage = House::where('street_id', 2)->where('type', 'Garage')->orderBy('number', 'asc')->get();

        $mortgrand = House::where('street_id', 3)->where('type', 'Villa')->orderBy('number', 'asc')->get();

        $mortgarage = House::where('street_id', 3)->where('type', 'Garage')->orderBy('number', 'asc')->get();

        $noarea = House::where('area_id', Null)->get();

        return view('house.index', compact('alagrand', 'abborrgrand', 'mortgrand', 'streets', 'noarea', 'mortgarage'
            ,'abborrgarage', 'alagarage'));
    }

    public function garages()
    {

        $garages = House::where('type', 'Garage')->orderBy('number', 'asc')->get();

       return view('house.garages', compact('garages')); 
    }

    public function noareas()
    {

        $noareas = House::where('type', 'Villa')->where('area_id', Null)->orderBy('area_id', 'asc')->orderBy('number', 'asc')->get();

       return view('house.noareas', compact('noareas')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $streets = Street::all();

        return view('house.create', compact('streets'));
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
        'number' => 'required|max:50',
        'name' => 'max:50',
        
        ]);

        $house = New House;

        $house->number = $request->number;
        $house->name = $request->name;
        $house->contact = $request->contact;
        $house->street_id = $request->street;

        $house->save();

        return redirect()->route('houses.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $house = House::find($id);

        $streets = Street::all();

        $areas = Area::where('street_id', $house->street_id)->get();

        return view('house.show', compact('house', 'streets', 'areas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $house = House::find($id);

        $streets = Street::all();

        $areas = Area::where('street_id', $house->street_id)->get();


        return view('house.edit', compact('house', 'streets', 'areas'));
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
        'number' => 'required|max:50',
        'name' => 'max:50',
        'contact' => 'max:50',
        'area' => 'max:50',
        ]);

        $house = House::find($id);

        $house->number = $request->number;
        $house->name = $request->name;
        $house->contact = $request->contact;
        $house->street_id = $request->street;
        $house->area_id = $request->area;

        $house->save();

        return redirect()->route('houses.show', ['id' => $house->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $house = House::findOrFail($id);

        $house->delete();

        return redirect()->action('HouseController@index');
    }
}
