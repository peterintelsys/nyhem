@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li><a href="{{ route('events.index') }}">Att göra</a></li>
<li>{{ $event->name }}</li>

</ul>

<h4>{{ $event->name }}</h4>

<div class="panel">

<div class="panel-header">

<div>{{ $event->name }}</div>

</div>

<div class="panel-content" style="padding-top: 12px;">

<div>Rubrik: {{ $event->name }}</div>
<br>
Start datum: {{ $event->start }}
<br>
Beskrivning: {{ $event->info }}
<br>
Budgeterad kostnad: {{ $event->budget }}
<br>
<div>Skapad av: {{ $event->user->name }}</div>
<br>
<div>Status: @if($event->status === Null)Pågående <a href="{{ action('EventController@statusdone', ['id' => $event->id]) }}">Markera som klart</a>@else Klart <a href="{{ action('EventController@statusnull', ['id' => $event->id]) }}">Markera som pågående</a>@endif</div>
<br>

<div>Händelsen tillhör: @isset($house)
Fastigheten <a href="{{ route('houses.show', ['id' => $house->id]) }}">{{ $house->street->name }} {{ $event->house->number }}</a> @endisset 
@isset($area)Område <a href="{{ route('areas.show', ['id' => $area->id]) }}">{{ $area->name }} {{ $area->street->name }}</a> @endisset</div>
<br>

<a href="{{ route('events.edit', ['id' => $event->id]) }}" class="button">Ändra</a>
<a href="javascript:void(0);" onclick="showModal(this)" class="button" data-target="deleteevent">Ta bort</a>

</div>

</div>

<div id="deleteevent" class="modal">

<div class="modal-panel">

<div class="panel-header">

<div style="font-size: 24px; margin: 12px 0;">Vill du radera posten</div>

<div><a href="javascript:void(0);" onclick="closeDrop(this)" data-target="deleteevent">Ångra</a></div>

</div>

<div class="panel-content">
<br>
<form method="POST" action="{{ route('events.destroy', ['id' => $event->id]) }}">
  {{ csrf_field() }}{{ method_field('DELETE') }}
      
    
  <input class="button-primary" style="background-color: red; border-color:red;" type="submit" value="Radera posten">
</form>

</div>

</div>

</div>

</div>
@endsection