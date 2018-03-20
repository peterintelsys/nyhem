@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li><a href="{{ route('areas.index') }}">Skötselområden</a></li>
<li>{{ $area->name }} {{ $area->street->name }}</li>
</ul>

<h4>Detalj info:</h4>

<div class="column two">

<div>

<div class="panel">

<div class="panel-header">

<div><strong>{{ $area->name }} {{ $area->street->name }}</strong></div>

<div>
  
<div class="dropdown">
      <a href="javascript:void(0);" onclick="myFunction(this)" class="dropbtn trigram" data-target="areadrop">&#9776;</a>
      <div id="areadrop" class="dropdown-content">

        
        <a href="{{ route('areas.edit', ['id' => $area->id]) }}">Ändra...</a>
        <a href="{{ action('EventController@newcreate', ['id' => $area->id]) }}">Att göra...</a>
        <a href="javascript:void(0);" onclick="showModal(this)" data-target="deletearea">Ta bort...</a>
        

      </div>
      </div>

</div>

</div>

<div class="panel-content">
<br>
<strong>Status</strong><br>
<div style="width:40px;height:20px;background-color: @if($area->status === 1)#588751 @elseif($area->status === 2)#FFC700
@elseif($area->status === 3)#D41942 @endif;"></div>
<br>

<strong>Info (arbetsbeskrivning)</strong><br>
 {{ $area->info }}<br><br>

 <strong>Svårigheter</strong><br>
 {{ $area->problems }}<br><br>

<strong>Ansvariga för området</strong><br>
@foreach ($area->houses as $house)

<div><a href="{{ route('houses.show', ['id' => $house->id]) }}">{{ $house->street->name }} {{ $house->number }}</a></div>

@endforeach
<br><br>
<strong>Att göra</strong><br>
@foreach ($area->events as $event)

<div><a href="{{ route('events.show', ['id' => $event->id]) }}">{{ $event->start }} {{ $event->name }}</a></div>

@endforeach
<br><br>


</div>



</div>

<div class="panel">

<div class="panel-header" style="font-size: 24px;">

Foto

</div>

<div class="panel-content">

<div class="column two" style="margin-top:16px;">
@foreach($area->photos as $photo)
<div>
<img src="{{ asset("storage/photos/$photo->info") }}" alt="Mountain View" width="100%" height="200">
</div>
@endforeach
</div>

<div style="margin-top:12px;">
<a href="javascript:void(0);" onclick="showModal(this)" class="button" data-target="createphotos">Lägg till foto...</a>
</div>
</div>

</div>



</div>

<div>

<div class="panel">
	

@isset($area->location)
<iframe
  width="100%"
  height="450"
  frameborder="0" style="border:0; padding:4px;"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAIn8DrJAIemaZsKWlp5wbggn5aXM4e9B4
    &q={{ $area->location }}&zoom=18&maptype=satellite" allowfullscreen>
</iframe>
@endisset

@empty($area->location)

<iframe
  width="100%"
  height="450"
  frameborder="0" style="border:0; padding:4px;"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAIn8DrJAIemaZsKWlp5wbggn5aXM4e9B4
    &q={{ $area->street->name }},Ängelholm+Sweden&zoom=18&maptype=satellite" allowfullscreen>
</iframe>

@endempty



</div>

</div>

</div>

<div id="editarea" class="modal">

<div class="modal-panel">

<div class="panel-header">

<div style="font-size: 24px; margin: 12px 0;">Ändra posten</div>

<div><a href="javascript:void(0);" onclick="closeDrop(this)" data-target="editarea">Stäng</a></div>

</div>

<div class="panel-content">

<form method="POST" action="{{ route('areas.update', ['id' => $area->id]) }}">
  {{ csrf_field() }}{{ method_field('PUT') }}

  		<label for="exampleRecipientInput">Gatunamn</label>
      <select class="u-full-width" id="exampleRecipientInput" name="street">
      <option value="{{ $area->street->id }}">{{ $area->street->name }}</option>
      @foreach ($streets as $street)
        <option value="{{ $street->id }}">{{ $street->name }}</option>
      @endforeach
      </select>
      <label for="exampleEmailInput">Namn</label>
      <input class="u-full-width" type="text" placeholder="Ange fastighetsnummer" name="name" value="{{ $area->name }}">
      <label for="exampleEmailInput">Plats ( LAT/LONG )</label>
      <input class="u-full-width" type="text" placeholder="Ange longitud/latitud ex. 56.242618, 12.883010" name="location" id="exampleEmailInput" value="{{ $area->location }}">
      <label for="exampleEmailInput">Info ( arbetsbeskrivning )</label>
      <textarea class="u-full-width" placeholder="Beskriv skötseluppgifter" name="info">{{ $area->info }}</textarea>
      <label for="exampleEmailInput">Svårigheter</label>
      <textarea class="u-full-width" placeholder="Beskriv svårigheter med området" name="problems">{{ $area->problems }}</textarea>

      <label for="exampleRecipientInput">Hur fungerar skötseln?</label>
      <select class="u-full-width" id="exampleRecipientInput" name="status">
      <option value="{{ $area->status }}">@if ($area->status === 1) Mycket bra @elseif ($area->status === 2) Problem finns
      @elseif ($area->status === 3) Dåligt @endif</option>
      
      <option value="1">Mycket bra</option>
      <option value="2">Problem finns</option>
      <option value="3">Dåligt</option>
    
      </select>
      <br>
    
    
  <input class="button-primary" type="submit" value="Spara">
</form>

</div>

</div>

</div>

<div id="createphotos" class="modal">

<div class="modal-panel">

<div class="panel-header">

<div style="font-size: 24px; margin: 12px 0;">Lägg till ett foto</div>

<div><a href="javascript:void(0);" onclick="closeDrop(this)" data-target="createphotos">Stäng</a></div>

</div>

<div class="panel-content">

<form method="POST" action="/areaphotos" enctype="multipart/form-data">
  {{ csrf_field() }}

      <br>
      <label for="input">Välj foto...</label>
      <input class="inputfile" type="file" name="file" id="input">
      <br>
      <input class="u-full-width" type="hidden" placeholder="Ange ett gatunamn" name="id" value="{{ $area->id }}">
      
    
    
  <input class="button-primary" type="submit" value="Spara">
</form>

</div>

</div>

</div>

<div id="deletearea" class="modal">

<div class="modal-panel">

<div class="panel-header">

<div style="font-size: 24px; margin: 12px 0;">Vill du radera posten</div>

<div><a href="javascript:void(0);" onclick="closeDrop(this)" data-target="deletearea">Ångra</a></div>

</div>

<div class="panel-content">
<br>
<form method="POST" action="{{ route('areas.destroy', ['id' => $area->id]) }}">
  {{ csrf_field() }}{{ method_field('DELETE') }}

  <input class="button-primary" style="background-color: red; border-color:red;" type="submit" value="Radera posten">
</form>

</div>

</div>

</div>

</div>

</div>
@endsection