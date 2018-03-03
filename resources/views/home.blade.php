@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
</ul>

<br>
Välkommen {{ auth()->user()->name }}
<br><br>


<div class="column three">

<div class="module-index background-one">
<a href="{{ route('houses.index') }}">Fastigheter</a>
</div>
<div class="module-index background-three">
<a href="{{ route('areas.index') }}">Skötselområde</a>
</div>
<div class="module-index background-three">
<a href="/admin">Administration</a>
</div>

</div>

</div>
                
</div>
@endsection
