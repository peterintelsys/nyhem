@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li><a href="{{ route('events.index') }}">Att göra</a></li>
<li>Skapa ny</li>

</ul>

<h4>Skapa en ny händelse</h4>

<form method="POST" action="{{ route('events.store') }}">
  {{ csrf_field() }}

      
      
      <label for="exampleEmailInput">Rubrik</label>
      <input type="text" placeholder="Ange rubrik" name="name" id="exampleEmailInput">
      
      <label for="exampleEmailInput">Start datum</label>
      <input type="text" placeholder="ex. 2017-01-01" name="start" id="exampleEmailInput">
      
      <label for="exampleEmailInput">Beskrivning</label>
      <textarea class="u-full-width" type="text" placeholder="Beskrivning" name="info" id="exampleEmailInput"></textarea>
      
      <label for="exampleEmailInput">Budgeterad kostnad</label>
      <input type="text" placeholder="" name="budget" id="exampleEmailInput">

      @isset($test)
      <input type="hidden" name="relation" id="exampleEmailInput" value="{{ $test }}">
      <input type="hidden" name="relationid" id="exampleEmailInput" value="{{ $newid }}">
      @endisset

    <br>
    
  <input class="button-primary" type="submit" value="Spara">
</form>



</div>
@endsection