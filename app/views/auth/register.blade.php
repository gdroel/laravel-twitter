@extends('layout')

@section('content')

<div class="container">
<div class="col-md-4 col-md-offset-4">
	<h1>Register</h1>
	{{ Form::open(array('action'=>'AuthController@doRegister')) }}

	{{ Form::label('name','Name') }}
	{{ Form::text('name',null,array('class'=>'form-control')) }}

	{{ Form::label('username','Username') }}
	{{ Form::text('username',null,array('class'=>'form-control')) }}

	{{ Form::label('email','Email') }}
	{{ Form::text('email',null,array('class'=>'form-control')) }}

	{{ Form::label('password','Password') }}
	{{ Form::password('password',array('class'=>'form-control')) }}
	<br>
	{{ Form::submit('Sign Up', array('class'=>'btn btn-success')) }}
	{{ Form::close() }}
</div>
</div>
@stop