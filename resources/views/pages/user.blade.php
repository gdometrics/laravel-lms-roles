@extends('layouts.master')


@section('content')
    	
    	<h4>{{ $user->name }}</h4>
    	<p>{{ $user->email }}</p>
		@foreach($user->roles as $role)
			<p>
				{{ $role->label }} 
				@can('edit_students_permissions') - 
					<a href="/edit_role/{{$user->id}}">Edit Role</button>
				@endcan
			</p>
		@endforeach

		
    	

@endsection