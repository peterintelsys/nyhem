@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li><a href="{{ route('areas.index') }}">Skötselområden</a></li>
<li>Problem finns</li>

</ul>

<h4>Skötselområden där problem finns</h4>


<div class="panel">

<div class="panel-header" style="font-size: 18px;">
<div>Skötselområden</div><div>{{ count($areas) }} st</div>
</div>


<div class="panel-content" style="margin:12px 0;">
@foreach ($areas as $area)
<div class="panel-list"><a href="/areas/{{$area->id}}">{{ $area->name }}</a></div>
@endforeach


</div>

</div>


</div>
@endsection