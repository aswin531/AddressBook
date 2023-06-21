@extends('layouts.master')
@section('content')
   <h1>Register</h1>
   <div class="row">
     <div class="col-sm-6 offset-sm-3"> 
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" name="last_name" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Confirmation Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <hr>
            <button class="btn btn-primary">Register</button>
        </form>
     </div>
   </div>
@endsection