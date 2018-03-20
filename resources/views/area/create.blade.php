@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li><a href="{{ route('areas.index') }}">Skötselområde</a></li>
<li>Skapa nytt område</li>

</ul>

<h4>Skapa nytt skötselområde</h4>

<div class="panel" style="padding:18px 22px;">

<form method="POST" action="{{ route('areas.store') }}">
  {{ csrf_field() }}

      <label for="exampleRecipientInput">Gatunamn</label>
      <select class="u-full-width" id="exampleRecipientInput" name="street">
      <option value="0">Välj gata</option>
      @foreach ($streets as $street)
        <option value="{{ $street->id }}">{{ $street->name }}</option>
      @endforeach
      </select>
      <label for="exampleEmailInput">Namn</label>
      <input class="u-full-width" type="text" placeholder="Ange namn på området ex. G7" name="name" id="exampleEmailInput">
      <label for="exampleEmailInput">Plats ( LAT/LONG )</label>
      <input class="u-full-width" type="text" placeholder="Ange longitud/latitud ex. 56.242618, 12.883010" name="location" id="exampleEmailInput">
      <label for="exampleEmailInput">Info (arbetsbeskrivning)</label>
      <textarea class="u-full-width" type="text" placeholder="Beskriv arbetsuppgifter för området" name="info" id="exampleEmailInput"></textarea>
      <label for="exampleEmailInput">Svårigheter</label>
      <textarea class="u-full-width" type="text" placeholder="Beskriv svårigheter med området" name="problems"></textarea>

      <label for="exampleRecipientInput">Status</label>
      <select class="u-full-width" id="exampleRecipientInput" name="status">
      <option value="0">Ange status</option>
      
      <option value="1">Mycket bra</option>
      <option value="2">Problem finns</option>
      <option value="3">Dåligt</option>
    
      </select>
      <br><br>
    
    
  <input class="button-primary" type="submit" value="Spara">
</form>

</div>

</div>
@endsection