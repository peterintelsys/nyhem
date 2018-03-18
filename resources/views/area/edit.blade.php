@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li><a href="{{ route('areas.index') }}">Skötselområde</a></li>
<li>{{ $area->name }}</li>
</ul>

<h4>Fastighets info:</h4>

<div class="column two">

<div>

<div class="panel">

<div class="panel-header">

<div><strong>{{ $area->name}}</strong></div>



</div>

<div class="panel-content">
<br>

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
    &q={{ $area->street->name }},Ängelholm+Sweden&zoom=18&maptype=satellite" allowfullscreen>
</iframe>



</div>

</div>

</div>



</div>
@endsection