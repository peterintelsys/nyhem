@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li>Skötselområden</li>

</ul>

<h4>Skötselområden</h4>



<div><a href="{{ route('areas.create') }}" class="button">Lägg till område</a></div><br>


<div class="panel">
<div class="panel-header">
Statistik
</div>

<div class="panel-content">
<br>
<div>Totalt antal områden: {{ count($areas)}}</div>
<div><a href="/areas/good" style="text-decoration: none;">Fungerar mycket bra: {{ count($areas->where('status', 1))}}</a></div>
<div><a href="/areas/notgood" style="text-decoration: none;">Problem finns: {{ count($areas->where('status', 2))}}</a></div>
<div><a href="/areas/bad" style="text-decoration: none;">Fungerar dåligt: {{ count($areas->where('status', 3))}}</a></div>
<br>
</div>
</div>


<div class="column two">


<div class="panel">

<div class="panel-header" style="font-size: 18px;">
<div>Ålagränd</div>
</div>


<div class="panel-content" style="margin:12px 0;">
<table class="u-full-width">
  <tbody>
@foreach ($alagrand as $ala)

<tr>
<td><a href="/areas/{{$ala->id}}" style="text-decoration: none;">{{ $ala->name }} {{ $ala->street->name }}</a></td>
<td><div style="width:40px;height:20px;background-color: @if($ala->status === 1)#588751 @elseif($ala->status === 2)#FFC700
@elseif($ala->status === 3)#D41942 @endif;"></div></td>
</tr>
@endforeach

</tbody>
</table>

</div>

</div>

<div class="panel">

<div class="panel-header" style="font-size: 18px;">
<div>Abborrgränd</div>
</div>

<div class="panel-content" style="margin:12px 0 24px 0;">
<table class="u-full-width">
  <tbody>
@foreach ($abborrgrand as $abborr)

<tr>
<td><a href="/areas/{{$abborr->id}}" style="text-decoration: none;">{{ $abborr->name }} {{ $abborr->street->name }}</a></td>
<td><div style="width:40px;height:20px;background-color: @if($abborr->status === 1)#588751 @elseif($abborr->status === 2)#FFC700
@elseif($abborr->status === 3)#D41942 @elseif($abborr->status === 0)Status saknas @endif;"></div></td>
</tr>
@endforeach

</tbody>
</table>
</div>



</div>

<div class="panel">
<div class="panel-header" style="font-size: 18px;">
<div>Mörtgränd</div>
</div>

<div class="panel-content" style="margin:12px 0;">

<table class="u-full-width">
  <tbody>
@foreach ($mortgrand as $mort)

<tr>
<td><a href="/areas/{{$mort->id}}" style="text-decoration: none;">{{ $mort->name }} {{ $mort->street->name }}</a></td>
<td><div style="width:40px;height:20px;background-color: @if($mort->status === 1)#588751 @elseif($mort->status === 2)#FFC700
@elseif($mort->status === 3)#D41942 @endif;"></div></td>
</tr>
@endforeach

</tbody>
</table>

</div>

</div>

</div>


</div>
@endsection