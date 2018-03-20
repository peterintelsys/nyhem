@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li><a href="{{ route('houses.index') }}">Fastigheter</a></li>
<li>{{ $house->street->name }} {{ $house->number }}</li>
</ul>

<h4>Fastighets info:</h4>

<div class="column two">

<div>

<div class="panel">

<div class="panel-header">

<div>{{ $house->street->name }} @if($house->type == 'Garage') G @endif{{ $house->number }}</div>

<div>
  
<div class="dropdown">
      <a href="javascript:void(0);" onclick="myFunction(this)" class="dropbtn trigram" data-target="housedrop">&#9776;</a>
      <div id="housedrop" class="dropdown-content">

        
        <a href="{{ route('houses.edit', ['id' => $house->id]) }}">Ändra...</a>
        <a href="{{ action('EventController@newcreate', ['id' => $house->id]) }}">Att göra...</a>
        

      </div>
      </div>

</div>

</div>

<div class="panel-content">
<br>
<strong>Fastighetsbetäckning:</strong><br>
 {{ $house->name }}<br><br>

 <strong>Kontaktinfo:</strong><br>
 {{ $house->contact }}<br><br>

 <strong>Ansvarsområde:</strong><br>
 @isset ($house->area->name)
 <div><a href="{{ route('areas.show', ['id' => $house->area->id]) }}">{{ $house->area->name }} {{ $house->street->name }}</a></div>
 
 @endisset
 <br><br>

 <strong>Att göra:</strong><br>
 @foreach($house->events as $event)

<div><a href="{{ route('events.show', ['id' => $event->id]) }}">{{ $event->start }} {{ $event->name }}</a></div>

 @endforeach
 <br><br>

<br>

</div>



</div>

</div>

<div>

<div class="panel">
	


<iframe
  width="100%"
  height="450"
  frameborder="0" style="border:0; padding:4px;"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAIn8DrJAIemaZsKWlp5wbggn5aXM4e9B4
    &q={{ $house->street->name }} {{ $house->number }},Ängelholm+Sweden&zoom=18&maptype=satellite" allowfullscreen>
</iframe>



</div>

</div>

</div>


<div id="deletehouse" class="modal">

<div class="modal-panel">

<div class="panel-header">

<div style="font-size: 24px; margin: 12px 0;">Vill du radera posten</div>

<div><a href="javascript:void(0);" onclick="closeDrop(this)" data-target="deletehouse">Ångra</a></div>

</div>

<div class="panel-content">
<br>
<form method="POST" action="{{ route('houses.destroy', ['id' => $house->id]) }}">
  {{ csrf_field() }}{{ method_field('DELETE') }}

      
      <input class="u-full-width" type="hidden" placeholder="Ange namn" name="id" value="{{ $house->id }}">
      
    
  <input class="button-primary" style="background-color: red; border-color:red;" type="submit" value="Radera posten">
</form>

</div>

</div>

</div>

</div>
@endsection