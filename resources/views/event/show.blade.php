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

Rubrik: {{ $event->name }}
<br>
Start datum: {{ $event->start }}
<br>
Beskrivning: {{ $event->info }}
<br><br>
<a href="" class="button">Ändra</a>
</div>

</div>

</div>
@endsection