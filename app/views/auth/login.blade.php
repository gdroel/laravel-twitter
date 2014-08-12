{{ Form::open(array('action'=>'AuthController@doLogin')) }}

{{ $errors->first('email') }}
{{ $errors->first('password') }}

{{ Form::label('email','email') }}
{{ Form::text('email') }}

{{ Form::label('password','Password')}}
{{ Form::text('password') }}

{{ Form::submit('login') }}
{{ Form::close() }}