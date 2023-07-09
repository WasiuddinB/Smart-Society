@extends('layout')
@section('content')
  
    <div class="card">
        <div class="card-header">Register Form</div>
        <div class="card-body"> 
        
            <form action= "{{ route('register') }}" method="post">
             {!! csrf_field() !!}   
            <label>First Name</label>
            <input type="text" name="name" id="name" class ="form-control"> </br>

      
            <label>Email</label>
            <input type="email" name="email" id="email" class ="form-control"> </br>


            <label>Password</label>
            <input type="password" name="password" id="password" class ="form-control"> </br>
            

            <label>Date Of Birth</label>
            <input type="date" name="dob" id="dob" class ="form-control"> </br>

            <label>Phone</label>
            <input type="text" name="phone" id="phone" class ="form-control"> </br>

            <label>Street No.</label>
            <input type="text" name="st_no" id="st_no" class ="form-control"> </br>

            <label>House No.</label>
            <input type="text" name="house" id="house" class ="form-control"> </br>

            <input type="submit" value="Save" class="btn btn-success"> 

            </form>
        </div>
    </div>

@stop