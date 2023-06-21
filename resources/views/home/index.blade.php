 @extends('layouts.master')
 @section('content')
 <h1>Welcome to AddressBook</h1>
 <p>connect others</p>
 <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
 <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
 @endsection