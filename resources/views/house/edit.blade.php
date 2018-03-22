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



</div>

<div class="panel-content">
<br>

<form method="POST" action="{{ route('houses.update', ['id' => $house->id]) }}">
  {{ csrf_field() }}{{ method_field('PUT') }}

      <label for="exampleRecipientInput">Gatunamn</label>
      <select class="u-full-width" id="exampleRecipientInput" name="street">
      <option value="{{ $house->street->id }}">{{ $house->street->name }}</option>
      @foreach ($streets as $street)
        <option value="{{ $street->id }}">{{ $street->name }}</option>
      @endforeach
      </select>
      <label for="exampleEmailInput">Fastighetsnummer</label>
      <input class="u-full-width" type="text" placeholder="Ange fastighetsnummer" name="number" value="{{ $house->number }}">
      <label for="exampleEmailInput">Garagelänga</label>
      <input class="u-full-width" type="text" placeholder="Ange fastighetsnummer" name="garagehouse" value="{{ $house->garagehouse }}">

      <label for="exampleEmailInput">Garageport</label>
      <input class="u-full-width" type="text" placeholder="Ange fastighetsnummer" name="garagenbr" value="{{ $house->garagenbr }}">

      <label for="exampleEmailInput">Fastighetsbetäckning</label>
      <input class="u-full-width" type="text" placeholder="Ange fastighetsbetäckning" name="name" value="{{ $house->name }}">
      <label for="exampleEmailInput">Kontaktinfo</label>
      <textarea class="u-full-width" type="text" placeholder="Ange kontaktperson för gatan" name="contact">{{ $house->contact }}</textarea>

    
    
  <input class="button-primary" type="submit" value="Spara"> <a class="button" href="{{ route('houses.show', ['id' =>  $house->id]) }}">Ångra</a>
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
    &q={{ $house->street->name }} {{ $house->number }},Ängelholm+Sweden&zoom=18&maptype=satellite" allowfullscreen>
</iframe>



</div>

</div>

</div>



</div>
@endsection