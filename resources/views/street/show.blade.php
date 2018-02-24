@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li><a href="{{ route('streets.index') }}">Gator</a></li>
<li>{{ $street->name }}</li>
</ul>

<h4>{{ $street->name }}</h4>

<div class="column main-grid">


<div>

<a class="button" href="{{ route('houses.create') }}">Lägg till fastighet</a>
<a class="button" href="">Lägg till Skötselområde</a><br>


<div class="dropdown">
 <a href="#createphotos" onclick="showDrop(this)" class="button" data-target="createphotos">Lägg till foto</a>     
      
      <div id="createphotos" class="drop-content">

      <form method="POST" action="{{ route('streetphotos.store') }}" enctype="multipart/form-data">
  		{{ csrf_field() }}


      <label for="exampleEmailInput">Välj ett foto...</label>
      <input class="u-full-width" type="file" placeholder="Ange ett gatunamn" name="file" id="exampleEmailInput">
      <input class="u-full-width" type="hidden" placeholder="Ange ett gatunamn" name="id" value="{{ $street->id }}">
    
  		<input class="button-primary" type="submit" value="Spara">
		</form>

      </div>
</div>

</div>

<div>
@foreach($street->photos as $photo)
<img src="{{ asset("storage/photos/$photo->info") }}" alt="Mountain View" width="500" height="600">
@endforeach
</div>



</div>
</div>
@endsection