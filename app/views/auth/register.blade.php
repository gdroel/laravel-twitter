{{ Form::open(array('action'=>'AuthController@doRegister')) }}

{{ Form::label('name','Name') }}
{{ Form::text('name') }}

{{ Form::label('username','Username') }}
{{ Form::text('username') }}

{{ Form::label('email','Email') }}
{{ Form::text('email') }}

{{ Form::label('password','Password') }}
{{ Form::password('password') }}

{{ Form::submit('Sign Up') }}
{{ Form::close() }}