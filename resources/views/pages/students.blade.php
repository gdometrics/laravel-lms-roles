@extends('layouts.master')


@section('content')
    	<h4>All Students</h4>

		<ul class="list-group">
  			@foreach($students as $student)
  				<li class="list-group-item"><a href="student/{{ $student->id }}">{{ $student->name }}</a></li>
  			@endforeach
		</ul>
@endsection