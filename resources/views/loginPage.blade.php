@extends('layout')

@section('content')

<h3 class='center'>Login Page</h3>
<form method='POST' action='login' >
  <div class="mb-3">
      @csrf
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name='email' aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
