@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li><a href="{{ route('areas.index') }}">Skötselområden</a></li>
<li>Fungerar dåligt</li>

</ul>

<h4>Skötselområden som fungerar dåligt</h4>


<div class="panel">

<div class="panel-header" style="font-size: 18px;">
<div>Skötselområden</div><div>{{ count($areas) }} st</div>
</div>


<div class="panel-content" style="margin:12px 0;">
@foreach ($areas as $area)
<div><a href="/areas/{{$area->id}}">{{ $area->name }} ({{ $area->street->name }})</a> {{ $area->problems }}</div>
@endforeach


</div>

</div>


</div>
@endsection