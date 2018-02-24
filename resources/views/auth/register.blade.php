@extends('layouts.main')

@section('content')
<div class="container">
   
 <div class="panel" style="padding:20px 20px 0 20px; margin-top: 30px;">

 <h5>Registrera nytt konto</h5>   

    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}


    <label for="name">Namn</label>
    <input class="u-full-width" type="text" placeholder="ex. Peter" name="name" id="name" value="{{ old('name') }}">

    <label for="exampleEmailInput">Email</label>
    <input class="u-full-width" type="email" placeholder="ex. test@gmail.com" name="email" id="exampleEmailInput" value="{{ old('email') }}">

    <label for="test">Lösenord</label>
    <input class="u-full-width" type="password" placeholder="*****" name="password" id="test">

    <label for="testone">Lösenord</label>
    <input class="u-full-width" type="password" placeholder="*****" name="password_confirmation" id="testone">

    <input class="button-primary" type="submit" value="Submit">


    </form>

    </div>                               
                        
</div>
@endsection
