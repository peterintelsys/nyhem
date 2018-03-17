@extends('layouts.main')

@section('content')
<div class="container">
<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
</ul>

<br>
<div style="padding-left:12px;"><h5>Välkommen {{ auth()->user()->name }}</h5></div><br>


<div class="column three">

<div class="module-index background-one">
<a href="{{ route('houses.index') }}">Fastigheter</a>
</div>
<div class="module-index background-three">
<a href="{{ route('areas.index') }}">Skötselområde</a>
</div>
<div class="module-index background-three">
<a href="{{ route('events.index') }}">Att göra</a>
</div>
<div class="module-index background-three">
<a href="/admin">Administration</a>
</div>

</div>

</div>
                
</div>
@endsection
