@extends('layout')

@section('content')

<h4 class="center">Users List</h4>
<!-- <button class="btn btn-primary" id="loadList">Load List</button> -->
<ul id="list">




@foreach($users as $user)
<li>
 <span class='spanC'>{{$user->id}}</span>
 <span class='spanC'>{{$user->name}}</span>
 <span class='spanC'>{{$user->email}}</span>
</li>

@endforeach
</ul>



@endsection