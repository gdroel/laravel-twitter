@extends('layout')

@section('content')
<div class="container">

<div class="col-md-6 col-md-offset-3">
<h1>Compose a Tweet</h1>

{{ Form::open(array('action'=>'PostsController@doCreate')) }}
{{ Form::textarea('body',null, array('class'=>'form-control')) }}
{{ Form::hidden('user_id',Auth::user()->id)}}

<br>
{{ Form::submit('Tweet', array('class'=>'btn btn-info')) }}
{{ Form::close() }}
</div>
</div>
@stop
