<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
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
        //
        $events = Event::all();

        return view('event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $newid = 'events';

         $test = Null;

         
        return view('event.create', compact('test', 'newid'));
    }

    public function newcreate($id)
    {
         $url = url()->previous();

         $newid = $id;

         $test = Null;

         if (str_contains($url, 'houses')){
            $test = 'houses';
         }elseif (str_contains($url, 'areas')) {
             $test = 'areas';
        }else{
            $test = Null;
        }


        return view('event.create', compact('test', 'newid'));
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
        'name' => 'required|max:50',
        ]);

        $budget = $request->budget;

        $event = New Event;

        $event->name = $request->name;
        $event->start = $request->start;
        $event->info = $request->info;
        $event->budget = $budget;
        $event->user_id = $request->user()->id;

        if($request->relation ==='houses'){
         $event->house_id = $request->relationid;   
        }
        if($request->relation ==='areas'){
         $event->area_id = $request->relationid;   
        }

        $event->save();

        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //

        return view('event.show', compact('event'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event = Event::findOrFail($event->id);

        $event->delete();

        return redirect()->route('events.index');
    }
}
