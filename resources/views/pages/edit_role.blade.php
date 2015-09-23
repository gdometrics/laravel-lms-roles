@extends('layouts.master')


@section('content')
    
    <h4>{{ $user->name }}</h4>
    
    <form method="POST" action="/edit_role/{{ $user->id }}">
	{!! csrf_field() !!}
	
	<div class="form-group">
	   <select id="role" name="role" class="form-control">
	        @foreach (App\Role::all() as $role)
	            <option values="{{ $role->id }}">{{ $role->label }}</option>
	        @endforeach
	    </select>
	</div>

	<div class="form-group">
    	<button type="submit" class="btn btn-default">Update</button>
	</div>
</form>

    


@endsection