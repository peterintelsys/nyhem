@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li>Gator</li>
</ul>

<h4>Gatunamn</h4>



@foreach ($streets as $street)
<a class="button" href="/streets/{{ $street->id }}"> {{ $street->name }}</a>

@endforeach

</div>
@endsection