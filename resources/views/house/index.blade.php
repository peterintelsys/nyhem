@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li>Fastigheter</li>

</ul>

<h4>Fastigheter</h4>



<div><a href="javascript:void(0);" onclick="showModal(this)" class="button" data-target="createhouse">Lägg till fastighet</a></div><br>


<div class="column two">


<div class="panel">

<div class="panel-header" style="font-size: 18px;">
<div>Ålagränd</div>
</div>


<div class="panel-content" style="margin:12px 0;">
@foreach ($alagrand as $ala)
<div class="panel-list"><a href="/houses/{{$ala->id}}">{{ $ala->street->name }} {{ $ala->number }}</a></div>
@endforeach
</div>

</div>

<div class="panel">

<div class="panel-header" style="font-size: 18px;">
<div>Abborrgränd</div>
</div>

<div class="panel-content" style="margin:12px 0 24px 0;">
@foreach ($abborrgrand as $abborr)
<div class="panel-list"><a href="/houses/{{$abborr->id}}" style="text-decoration: none;">{{ $abborr->street->name }} {{ $abborr->number }}</a></div>
@endforeach
</div>



</div>

<div class="panel">
<div class="panel-header" style="font-size: 18px;">
<div>Mörtgränd</div>
</div>

<div class="panel-content" style="margin:12px 0;">
@foreach ($mortgrand as $mort)
<div class="panel-list"><a href="/houses/{{$mort->id}}" style="text-decoration: none;">{{ $mort->street->name }} {{ $mort->number }}</a></div>
@endforeach
</div>

</div>

</div>

<div id="createhouse" class="modal">

<div class="modal-panel">

<div class="panel-header">

<div style="font-size: 24px; margin:12px 0;">Skapa ny</div>

<div><a href="javascript:void(0);" onclick="closeDrop(this)" data-target="createhouse">Stäng</a></div>

</div>

<div class="panel-content">

<form method="POST" action="{{ route('houses.store') }}">
  {{ csrf_field() }}

      <label for="exampleRecipientInput">Gatunamn</label>
      <select class="u-full-width" id="exampleRecipientInput" name="street">
      <option value="0">Välj gata</option>
      @foreach ($streets as $street)
        <option value="{{ $street->id }}">{{ $street->name }}</option>
      @endforeach
      </select>
      <label for="exampleEmailInput">Fastighetsnummer</label>
      <input class="u-full-width" type="text" placeholder="Ange fastighetsnummer" name="number" id="exampleEmailInput">
      <label for="exampleEmailInput">Fastighetsbetäckning</label>
      <input class="u-full-width" type="text" placeholder="Ange fastighetsbetäckning" name="name" id="exampleEmailInput">
      <label for="exampleEmailInput">Kontaktinfo</label>
      <textarea class="u-full-width" type="text" placeholder="Ange kontaktperson för gatan" name="contact" id="exampleEmailInput"></textarea>
    
    
  <input class="button-primary" type="submit" value="Spara">
</form>

</div>

</div>

</div>


</div>
@endsection