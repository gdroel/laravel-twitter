@extends('layout')

@section('content')
<div class="jumbotron">
	<h1>{{ $user->name }}</h1>
	{{ $posts }}
</div>
<div class="container">

	<div class="row">
	<div class="col-md-6">
		<h2>Posts</h2>
		@foreach($user->posts as $post)
		<div class="tweet">
		<p>{{ $post->body }}</p>
		</div>
		@endforeach
	</div>


	<div class="col-md-3">
		<h3>Following ({{ $following }})</h3>
		@foreach($user->follow as $user)
		<li><a href="{{ action('UsersController@unFollow', $user->id) }}">{{ $user->name }}</a></li>
		@endforeach
	</div>

	<div class="col-md-3">
		<h3>Followers ({{ $followers }})</h3>
		@foreach($user->followers as $follower)
		<li>{{ $user->name }}</li>
		@endforeach
	</div>	
	</div>
</div>

@stop