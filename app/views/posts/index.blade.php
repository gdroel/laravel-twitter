@extends('layout')

@section('content')
<div class="container">

	@if(Auth::check())

		<div class="col-md-6">
			<h1>News Feed</h1>
			@foreach($newsFeed as $post)
			<div class="tweet">
				<strong>{{ $post->user->username }}</strong>
				<p>{{ $post->user->updated_at }}</p>
				<p>{{ $post->body }}</p>
			</div>
			@endforeach
		</div>

		<div class="col-md-3">
			<h2>Followers</h2>
			@foreach(Auth::user()->followers as $follower)
				<p>{{ $follower->name }}</p>
			@endforeach
		</div>

	@endif

	<div class="col-md-3">
		<h3>People you can follow:</h3>
		@foreach($users as $user)
			<p><a href="{{ action('UsersController@follow', $user->id) }}">{{ $user->name }}</a></p>
		@endforeach
	</div>
</div>

@stop

