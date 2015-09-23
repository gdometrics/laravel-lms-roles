@extends('layouts.master')


@section('content')
    
    <form method="POST" action="/auth/register">
		{!! csrf_field() !!}

		<div class="form-group">
	    	<label for="name">Name:</label>
	    	<input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
		</div>

		<div class="form-group">
	    	<label for="email">Email:</label>
	    	<input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
		</div>

		<div class="form-group">
	    	<label for="password">Password:</label>
	    	<input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">
		</div>

		<div class="form-group">
	    	<label for="password_confirmation">Confirm Password:</label>
	    	<input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
		</div>

		<div class="form-group">
			<label for="role">Role:</label>
		   <select id="role" name="role" class="form-control">
		        @foreach (App\Role::all() as $role)
		            <option values="{{ $role->id }}">{{ $role->label }}</option>
		        @endforeach
		    </select>
		</div>

		<div class="form-group">
	    	<button type="submit" class="btn btn-default">Register</button>
		</div>
	</form>

@endsection