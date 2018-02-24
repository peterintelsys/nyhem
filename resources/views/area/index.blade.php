@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li>Skötselområden</li>

</ul>

<h4>Skötselområden</h4>



<div><a href="javascript:void(0);" onclick="showModal(this)" class="button" data-target="createarea">Lägg till område</a></div><br>


<div class="column two">


<div class="panel">

<div class="panel-header" style="font-size: 18px;">
<div>Ålagränd</div>
</div>


<div class="panel-content" style="margin:12px 0;">
@foreach ($alagrand as $ala)
<div class="panel-list"><a href="/areas/{{$ala->id}}">{{ $ala->name }} ({{ $ala->info }})</a></div>
@endforeach
</div>

</div>

<div class="panel">

<div class="panel-header" style="font-size: 18px;">
<div>Abborrgränd</div>
</div>

<div class="panel-content" style="margin:12px 0 24px 0;">
@foreach ($abborrgrand as $abborr)
<div class="panel-list"><a href="/areas/{{$abborr->id}}" style="text-decoration: none;">{{ $abborr->name }}</a></div>
@endforeach
</div>



</div>

<div class="panel">
<div class="panel-header" style="font-size: 18px;">
<div>Mörtgränd</div>
</div>

<div class="panel-content" style="margin:12px 0;">
@foreach ($mortgrand as $mort)
<div><a href="/areas/{{$mort->id}}" style="text-decoration: none;">{{ $mort->name }}</a></div>
@endforeach
</div>

</div>

</div>

<div id="createarea" class="modal">

<div class="modal-panel">

<div class="panel-header">

<div style="font-size: 24px; margin:12px 0;">Skapa ny</div>

<div><a href="javascript:void(0);" onclick="closeDrop(this)" data-target="createarea">Stäng</a></div>

</div>

<div class="panel-content">

<form method="POST" action="{{ route('areas.store') }}">
  {{ csrf_field() }}

      <label for="exampleRecipientInput">Gatunamn</label>
      <select class="u-full-width" id="exampleRecipientInput" name="street">
      <option value="0">Välj gata</option>
      @foreach ($streets as $street)
        <option value="{{ $street->id }}">{{ $street->name }}</option>
      @endforeach
      </select>
      <label for="exampleEmailInput">Namn</label>
      <input class="u-full-width" type="text" placeholder="Ange namn på området ex. G7" name="name" id="exampleEmailInput">
      <label for="exampleEmailInput">Info</label>
      <textarea class="u-full-width" type="text" placeholder="Ange info..." name="info" id="exampleEmailInput"></textarea>
    
    
  <input class="button-primary" type="submit" value="Spara">
</form>

</div>

</div>

</div>


</div>
@endsection