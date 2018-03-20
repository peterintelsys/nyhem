@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li><a href="{{ route('events.index') }}">Att göra</a></li>
<li>{{ $event->name }}</li>

</ul>

<h4>Redigera</h4>

<div class="panel" style="padding:18px 22px;">
<form method="POST" action="{{ route('events.update', ['id' => $event->id]) }}">
  {{ csrf_field() }}{{ method_field('PUT') }}

      
      
      <label for="exampleEmailInput">Rubrik</label>
      <input type="text" placeholder="Ange rubrik" name="name" id="exampleEmailInput" value="{{ $event->name }}">
      
      <label for="exampleEmailInput">Start datum</label>
      <input type="text" placeholder="ex. 2017-01-01" name="start" id="exampleEmailInput" value="{{ $event->start }}">
      
      <label for="exampleEmailInput">Beskrivning</label>
      <textarea class="u-full-width" type="text" placeholder="Beskrivning" name="info" id="exampleEmailInput">{{ $event->info }}</textarea>
      
      <label for="exampleEmailInput">Budgeterad kostnad</label>
      <input type="text" placeholder="" name="budget" id="exampleEmailInput" value="{{ $event->budget }}">

      @isset($test)
      <input type="hidden" name="relation" id="exampleEmailInput" value="{{ $test }}">
      <input type="hidden" name="relationid" id="exampleEmailInput" value="{{ $newid }}">
      @endisset

    <br>
    
  <input class="button-primary" type="submit" value="Spara">
</form>
</div>


</div>
@endsection