@extends('layouts.master')


@section('content')
    	
    	<h4>{{ $student->name }}</h4>
    	<p>{{ $student->email }}</p>
		@foreach($student->roles as $role)
			<p>
				{{ $role->label }} 
				@can('edit_students_permissions') - 
					<a href="#">Edit Role</button>
				@endcan
			</p>
		@endforeach

		
    	

@endsection