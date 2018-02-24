@extends('layouts.main')

@section('content')
<div class="container">

<h1>Skapa en ny gata</h1>

<form method="POST" action="{{ route('streets.store') }}">
  {{ csrf_field() }}


      <label for="exampleEmailInput">Gatunamn</label>
      <input class="u-full-width" type="text" placeholder="Ange ett gatunamn" name="name" id="exampleEmailInput">
      <label for="exampleEmailInput">Kontaktansvarig</label>
      <input class="u-full-width" type="text" placeholder="Ange kontaktperson för gatan" name="contact" id="exampleEmailInput">
    
    
  <input class="button-primary" type="submit" value="Spara">
</form>

</div>
@endsection