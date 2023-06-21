@extends('layouts.master')
@section('content')
   <h1>Login</h1>
   <div class="row">
     <div class="col-sm-6 offset-sm-3"> 
        <form action="{{ route('authenticate') }}" method="POST">
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <hr>
            <button class="btn btn-primary">Login</button>
        </form>
     </div>
   </div>
@endsection