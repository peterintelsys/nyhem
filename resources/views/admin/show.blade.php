@extends('layouts.main')

@section('content')

<div class="container">

<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li><a href="/admin">Administration</a></li>
<li>{{ $user->name }}</li>
</ul>

<h4>Användare</h4>


<div class="column two">

<div>

  <div class="panel">

  <div class="panel-header">
  {{ $user->name }}
  </div>

  <div class="panel-content">
    
    
    <div class="panel-list"><a href="">{{ $user->email}} {{$user->name}}</a></div>

   
    <br>
<a href="javascript:void(0);" onclick="showModal(this)" class="button" data-target="deleteuser">Radera post</a>
  </div>

  </div>

</div>

<div>
  

</div>


</div>

<div id="deleteuser" class="modal">

<div class="modal-panel">

<div class="panel-header">

<div style="font-size: 24px; margin: 12px 0;">Lägg till användare</div>

<div><a href="javascript:void(0);" onclick="closeDrop(this)" data-target="deleteuser">Stäng</a></div>

</div>

<div class="panel-content">

<h5>Vill du radera användare {{ $user->name }}</h5>

<form method="POST" action="/admin/{{ $user->id }}">
  {{ csrf_field() }}{{ method_field('DELETE') }}

      
      <input class="u-full-width" type="hidden" placeholder="Ange namn" name="id" value="{{ $user->id }}">
      
    
  <input class="button-primary" type="submit" value="Radera">
</form>

</div>

</div>

</div>

</div>

@endsection