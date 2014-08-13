@extends('layout')

@section('content')

<div class="container">
	<div class="col-md-4 col-md-offset-4">
	{{ Form::open(array('action'=>'AuthController@doLogin')) }}

	{{ $errors->first('email') }}
	{{ $errors->first('password') }}

	{{ Form::label('email','Email') }}
	{{ Form::text('email',null, array('class'=>'form-control')) }}

	{{ Form::label('password','Password')}}
	{{ Form::password('password',array('class'=>'form-control')) }}

	<br>
	{{ Form::submit('login',array('class'=>'btn btn-success')) }}
	{{ Form::close() }}
	</div>
</div>

@stop