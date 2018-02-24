@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li><a href="{{ route('houses.index') }}">Fastigheter</a></li>
<li>{{ $house->street->name }} {{ $house->number }}</li>
</ul>

<h4>Fastighets info:</h4>

<div class="column two">

<div>

<div class="panel">

<div class="panel-header" style="font-size: 24px;">

{{ $house->street->name }} {{ $house->number }}

</div>

<div class="panel-content">
<br>
<strong>Fastighetsbetäckning:</strong><br>
 {{ $house->name }}<br><br>

 <strong>Kontaktinfo:</strong><br>
 {{ $house->contact }}<br><br>

 <strong>Ansvarsområde:</strong><br>
 @isset ($house->area->name)
 {{ $house->area->name }}<br><br>
 @endisset


<a href="javascript:void(0);" onclick="showModal(this)" class="button" data-target="edithouse">Ändra...</a>
</div>



</div>

</div>

<div>

<div class="panel">
	


<iframe
  width="100%"
  height="450"
  frameborder="0" style="border:0; padding:4px;"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAIn8DrJAIemaZsKWlp5wbggn5aXM4e9B4
    &q={{ $house->street->name }} {{ $house->number }},Ängelholm+Sweden&zoom=18&maptype=satellite" allowfullscreen>
</iframe>



</div>

</div>

</div>

<div id="edithouse" class="modal">

<div class="modal-panel">

<div class="panel-header">

<div style="font-size: 24px; margin: 12px 0;">Ändra posten</div>

<div><a href="javascript:void(0);" onclick="closeDrop(this)" data-target="edithouse">Stäng</a></div>

</div>

<div class="panel-content">

<form method="POST" action="{{ route('houses.update', ['id' => $house->id]) }}">
  {{ csrf_field() }}{{ method_field('PUT') }}

  		<label for="exampleRecipientInput">Gatunamn</label>
      <select class="u-full-width" id="exampleRecipientInput" name="street">
      <option value="{{ $house->street->id }}">{{ $house->street->name }}</option>
      @foreach ($streets as $street)
        <option value="{{ $street->id }}">{{ $street->name }}</option>
      @endforeach
      </select>
      <label for="exampleEmailInput">Fastighetsnummer</label>
      <input class="u-full-width" type="text" placeholder="Ange fastighetsnummer" name="number" value="{{ $house->number }}">
      <label for="exampleEmailInput">Fastighetsbetäckning</label>
      <input class="u-full-width" type="text" placeholder="Ange fastighetsbetäckning" name="name" value="{{ $house->name }}">
      <label for="exampleEmailInput">Kontaktinfo</label>
      <textarea class="u-full-width" type="text" placeholder="Ange kontaktperson för gatan" name="contact">{{ $house->contact }}</textarea>

      <select class="u-full-width" id="exampleRecipientInput" name="area">
      <option value="@isset($house->area_id){{ $house->area_id }}@endisset @empty($house->area_id)0 @endempty">@isset($house->area->name){{ $house->area->name }}@endisset @empty($house->area->name) Välj område @endempty</option>
      @foreach ($areas as $area)
        <option value="{{ $area->id }}">{{ $area->name }}</option>
      @endforeach
      </select>
    
    
  <input class="button-primary" type="submit" value="Spara">
</form>

</div>

</div>

</div>

</div>
@endsection