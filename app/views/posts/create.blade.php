{{ Form::open(array('action'=>'PostsController@doCreate')) }}
{{ Form::textarea('body') }}
{{ Form::hidden('user_id',Auth::user()->id)}}
{{ Form::submit('Tweet') }}
{{ Form::close() }}