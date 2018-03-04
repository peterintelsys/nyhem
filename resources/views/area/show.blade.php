@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li><a href="{{ route('areas.index') }}">Skötselområden</a></li>
<li>{{ $area->name }}</li>
</ul>

<h4>Detalj info:</h4>

<div class="column two">

<div>

<div class="panel">

<div class="panel-header" style="font-size: 24px;">

{{ $area->name }}

</div>

<div class="panel-content">
<br>
<strong>Info</strong><br>
 {{ $area->info }}<br><br>

<strong>Ansvariga för området</strong><br>
@foreach ($area->houses as $house)

<div><a href="{{ route('houses.show', ['id' => $house->id]) }}">{{ $house->street->name }} {{ $house->number }}</a></div>

@endforeach
<br><br>

<a href="javascript:void(0);" onclick="showModal(this)" class="button" data-target="editarea">Ändra...</a>
</div>



</div>

<div class="panel">

<div class="panel-header" style="font-size: 24px;">

Foto

</div>

<div class="panel-content">

<div class="column two" style="margin-top:16px;">
@foreach($area->photos as $photo)
<div>
<img src="{{ asset("storage/photos/$photo->info") }}" alt="Mountain View" width="100%" height="200">
</div>
@endforeach
</div>

<div style="margin-top:12px;">
<a href="javascript:void(0);" onclick="showModal(this)" class="button" data-target="createphotos">Lägg till foto...</a>
</div>
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
    &q={{ $area->street->name }},Ängelholm+Sweden&zoom=17&maptype=satellite" allowfullscreen>
</iframe>



</div>

</div>

</div>

<div id="editarea" class="modal">

<div class="modal-panel">

<div class="panel-header">

<div style="font-size: 24px; margin: 12px 0;">Ändra posten</div>

<div><a href="javascript:void(0);" onclick="closeDrop(this)" data-target="editarea">Stäng</a></div>

</div>

<div class="panel-content">

<form method="POST" action="{{ route('areas.update', ['id' => $area->id]) }}">
  {{ csrf_field() }}{{ method_field('PUT') }}

  		<label for="exampleRecipientInput">Gatunamn</label>
      <select class="u-full-width" id="exampleRecipientInput" name="street">
      <option value="{{ $area->street->id }}">{{ $area->street->name }}</option>
      @foreach ($streets as $street)
        <option value="{{ $street->id }}">{{ $street->name }}</option>
      @endforeach
      </select>
      <label for="exampleEmailInput">Namn</label>
      <input class="u-full-width" type="text" placeholder="Ange fastighetsnummer" name="name" value="{{ $area->name }}">
      <label for="exampleEmailInput">Info</label>
      <textarea class="u-full-width" type="text" placeholder="Ange kontaktperson för gatan" name="info">{{ $area->info }}</textarea>
    
    
  <input class="button-primary" type="submit" value="Spara">
</form>

</div>

</div>

</div>

<div id="createphotos" class="modal">

<div class="modal-panel">

<div class="panel-header">

<div style="font-size: 24px; margin: 12px 0;">Lägg till ett foto</div>

<div><a href="javascript:void(0);" onclick="closeDrop(this)" data-target="createphotos">Stäng</a></div>

</div>

<div class="panel-content">

<form method="POST" action="/areaphotos" enctype="multipart/form-data">
  {{ csrf_field() }}

      <br>
      <label for="input">Välj foto...</label>
      <input class="inputfile" type="file" name="file" id="input">
      <br>
      <input class="u-full-width" type="hidden" placeholder="Ange ett gatunamn" name="id" value="{{ $area->id }}">
      
    
    
  <input class="button-primary" type="submit" value="Spara">
</form>

</div>

</div>

</div>

</div>

</div>
@endsection