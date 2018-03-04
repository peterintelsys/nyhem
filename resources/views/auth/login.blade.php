@extends('layouts.main')

@section('content')
<div class="container">
    
<div class="column item-center">

<div class="panel" style="padding: 20px 20px 0 20px; margin-top:30px;">
<h5>Logga in</h5>
<form method="POST" action="{{ route('login') }}">
  {{ csrf_field() }}


      <label for="exampleEmailInput">Email</label>
      <input class="u-full-width" type="email" placeholder="Ange email" name="email" id="exampleEmailInput">
      <label for="exampleEmailInput">Lösenord</label>
      <input class="u-full-width" type="password" placeholder="*****" name="password" id="exampleEmailInput">
    
    
  <input class="button-primary" type="submit" value="Logga in...">
</form>

</div>


</div>

</div>
@endsection
