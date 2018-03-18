@extends('layouts.main')

@section('content')

<div class="container">

<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li>Att göra</li>
</ul>

<h4>Att göra</h4>

<a href="/events/create" class="button">Lägg till händelse...</a><br><br>

<div>

  <div class="panel">

  <div class="panel-header">
  Att göra lista
  </div>

  <div class="panel-content">
    
    @foreach ($events as $event)
    <div class="panel-list"><a href="{{ action('EventController@show', ['id' => $event->id]) }}">{{ $event->name}} 
    {{ $event->budget }}</a></div>

    @endforeach
    <br>

  </div>

  </div>

</div>



</div>

@endsection