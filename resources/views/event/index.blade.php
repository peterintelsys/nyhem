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
    
  <table class="u-full-width">
  <thead>
    <tr>
      <th>Skapad</th>
      <th>Rubrik</th>
      <th>Startdatum</th>
      <th>Kostnad</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($events as $event)
    <tr>
      <td><a href="{{ action('EventController@show', ['id' => $event->id]) }}">{{ $event->created_at->format('Y-m-d')}}</a></td>
      <td><a href="{{ action('EventController@show', ['id' => $event->id]) }}">{{ $event->name}}</a></td>
      <td><a href="{{ action('EventController@show', ['id' => $event->id]) }}">{{ $event->start}}</a></td>
      <td><a href="{{ action('EventController@show', ['id' => $event->id]) }}">{{ $event->budget}}</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
<br>
  </div>

  </div>

</div>



</div>

@endsection