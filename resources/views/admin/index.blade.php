@extends('layouts.main')

@section('content')

<div class="container">

<br>
<ul class="breadcrumb">
<li><a href="{{ route('home') }}">Hem</a></li>
<li>Administration</li>
</ul>

<h4>Administration</h4>

<a href="javascript:void(0);" onclick="showModal(this)" class="button" data-target="createuser">Lägg till användare...</a>

<div class="column two">

<div>

  <div class="panel">

  <div class="panel-header">
  Användare
  </div>

  <div class="panel-content">
    
    @foreach ($users as $user)
    <div class="panel-list"><a href="{{ action('AdminController@show', ['id' => $user->id]) }}">{{ $user->email}} {{$user->name}}</a></div>

    @endforeach
    <br>

  </div>

  </div>

</div>

<div>
  
@if (count($streets) === 0)

<a class="button" href="/admin/streets">Skapa gator</a>
<a class="button" href="/admin/streets">Skapa gator</a>


@endif


</div>


</div>

<div id="createuser" class="modal">

<div class="modal-panel">

<div class="panel-header">

<div style="font-size: 24px; margin: 12px 0;">Lägg till användare</div>

<div><a href="javascript:void(0);" onclick="closeDrop(this)" data-target="createuser">Stäng</a></div>

</div>

<div class="panel-content">

<form method="POST" action="/admin">
  {{ csrf_field() }}

      
      <label for="exampleEmailInput">Namn</label>
      <input class="u-full-width" type="text" placeholder="Ange namn" name="name">
      <label for="exampleEmailInput">Email</label>
      <input class="u-full-width" type="text" placeholder="Ange email" name="email">
      <label for="exampleEmailInput">Lösenord</label>
      <input class="u-full-width" type="password" placeholder="*****" name="password">
      <label for="exampleEmailInput">Repetera lösenord</label>
      <input class="u-full-width" type="password" placeholder="*****" name="password_confirmation">
      
    
    
  <input class="button-primary" type="submit" value="Spara">
</form>

</div>

</div>

</div>

</div>

@endsection