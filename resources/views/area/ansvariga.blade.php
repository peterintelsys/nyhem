@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li><a href="{{ route('areas.index') }}">Skötselområden</a></li>
<li><a href="{{ route('areas.show', ['id' => $area->id]) }}">{{ $area->name }} {{ $area->street->name }}</a></li>
<li>Ansvariga</li>
</ul>

<h4>Ansvariga för området</h4>

<div class="column two">

<div>

<div class="panel">

<div class="panel-header">

<div><strong>{{ $area->name }} {{ $area->street->name }}</strong></div>

<div>
  
<div class="dropdown">
      <a href="javascript:void(0);" onclick="myFunction(this)" class="dropbtn trigram" data-target="areadrop">&#9776;</a>
      <div id="areadrop" class="dropdown-content">

        
        <a href="{{ route('areas.show', ['id' => $area->id]) }}">Visa posten...</a>
        
        

      </div>
      </div>

</div>

</div>

<div class="panel-content">
<br>

<strong>Ansvariga:</strong>

<table class="u-full-width">
  <tbody>
    @foreach($ansvariga as $ansvarig)

    <tr>
      <td><a href="">{{ $ansvarig->street->name }} {{ $ansvarig->number }}</a></td>
    </tr>

    @endforeach
  </tbody>
</table>


<strong>Lägg till nya ansvariga: (klicka på länken för att lägga till)</strong>

<table class="u-full-width">
  <tbody>
    @foreach($houses as $house)

    <tr>
      <td><a href="/areas/{{$area->id}}/newansvariga/{{ $house->id }}">{{ $house->street->name }} {{ $house->number }}</a></td>
    </tr>

    @endforeach
  </tbody>
</table>


</div>



</div>



</div>

<div>

<div class="panel">
	

@isset($area->location)
<iframe
  width="100%"
  height="450"
  frameborder="0" style="border:0; padding:4px;"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAIn8DrJAIemaZsKWlp5wbggn5aXM4e9B4
    &q={{ $area->location }}&zoom=18&maptype=satellite" allowfullscreen>
</iframe>
@endisset

@empty($area->location)

<iframe
  width="100%"
  height="450"
  frameborder="0" style="border:0; padding:4px;"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAIn8DrJAIemaZsKWlp5wbggn5aXM4e9B4
    &q={{ $area->street->name }},Ängelholm+Sweden&zoom=18&maptype=satellite" allowfullscreen>
</iframe>

@endempty



</div>

</div>

</div>



</div>

</div>
@endsection