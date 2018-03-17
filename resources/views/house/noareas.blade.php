@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li><a href="{{ route('houses.index') }}">Fastigheter</a></li>
<li>Utan ansvarsområde</li>

</ul>

<h4>Fastiheter utan ansvarsområde</h4>


<div class="panel">

<div class="panel-header" style="font-size: 18px;">
<div>Garage</div><div>{{ count($noareas) }} st</div>
</div>


<div class="panel-content" style="margin:12px 0;">
@foreach ($noareas as $noarea)
<div class="panel-list"><a href="/houses/{{$noarea->id}}">{{ $noarea->street->name }} {{ $noarea->number }}</a></div>
@endforeach


</div>

</div>


</div>
@endsection