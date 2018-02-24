@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li><a href="{{ route('streets.index') }}">Fastigheter</a></li>
<li>Skapa ny</li>
</ul>

<h4>Skapa fastighet</h4>

<form method="POST" action="{{ route('houses.store') }}">
  {{ csrf_field() }}

  		<label for="exampleRecipientInput">Gatunamn</label>
      <select class="u-full-width" id="exampleRecipientInput" name="street">
      <option value="0">Välj gata</option>
      @foreach ($streets as $street)
        <option value="{{ $street->id }}">{{ $street->name }}</option>
      @endforeach
      </select>
      <label for="exampleEmailInput">Fastighetsnummer</label>
      <input class="u-full-width" type="text" placeholder="Ange fastighetsnummer" name="number" id="exampleEmailInput">
      <label for="exampleEmailInput">Fastighetsbetäckning</label>
      <input class="u-full-width" type="text" placeholder="Ange fastighetsbetäckning" name="name" id="exampleEmailInput">
      <label for="exampleEmailInput">Kontaktinfo</label>
      <textarea class="u-full-width" type="text" placeholder="Ange kontaktperson för gatan" name="contact" id="exampleEmailInput"></textarea>
    
    
  <input class="button-primary" type="submit" value="Spara">
</form>



</div>
@endsection