@extends('layouts.master')


@section('content')
    	<h4>All Students</h4>

		<ul class="list-group">
  			@foreach($users as $user)
  				<li class="list-group-item"><a href="user/{{ $user->id }}">{{ $user->name }}</a></li>
  			@endforeach
		</ul>
@endsection