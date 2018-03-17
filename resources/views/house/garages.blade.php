@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li><a href="{{ route('houses.index') }}">Fastigheter</a></li>
<li>Garage</li>

</ul>

<h4>Garage</h4>


<div class="panel">

<div class="panel-header" style="font-size: 18px;">
<div>Garage</div><div>{{ count($garages) }} st</div>
</div>


<div class="panel-content" style="margin:12px 0;">
@foreach ($garages as $garage)
<div class="panel-list"><a href="/houses/{{$garage->id}}">{{ $garage->street->name }} G{{ $garage->number }}</a></div>
@endforeach


</div>

</div>


</div>
@endsection