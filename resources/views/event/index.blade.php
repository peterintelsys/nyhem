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


  <div class="panel">

  <div class="panel-header">
  Pågående
  </div>

  <div class="panel-content">
    
  <table class="u-full-width">
  <thead>
    <tr>
      <th>När</th>
      <th>Rubrik</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($events as $event)
    <tr>
      <td><a href="{{ action('EventController@show', ['id' => $event->id]) }}">{{ $event->start}}</a></td></td>
      <td><a href="{{ action('EventController@show', ['id' => $event->id]) }}">{{ $event->name}}</a></td>
      <td>@if($event->status === Null)<a href="{{ action('EventController@statusdone', ['id' => $event->id]) }}" class="button" style="height: 28px; line-height: 28px; padding:0 12px;">Ej klar</a>@else Klart <a href="{{ action('EventController@statusnull', ['id' => $event->id]) }}">Markera</a>@endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<br>
  </div>

  </div>

  <div class="panel" style="margin-bottom: 120px;">

  <div class="panel-header">
  Klara
  </div>

  <div class="panel-content">
    
  <table class="u-full-width">
  <thead>
    <tr>
      <th>När</th>
      <th>Rubrik</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($eventsdone as $eventdone)
    <tr>
      <td><a href="{{ action('EventController@show', ['id' => $eventdone->id]) }}">{{ $eventdone->start}}</a></td></td>
      <td><a href="{{ action('EventController@show', ['id' => $eventdone->id]) }}">{{ $eventdone->name}}</a></td>
      <td>@if($eventdone->status === Null)Pågående <a href="{{ action('EventController@statusdone', ['id' => $eventdone->id]) }}">Markera som klart</a>@else<a href="{{ action('EventController@statusnull', ['id' => $eventdone->id]) }}" class="button" style="height: 28px; line-height: 28px; padding:0 12px;">Klar</a>@endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<br>
  </div>

  </div>





</div>

@endsection