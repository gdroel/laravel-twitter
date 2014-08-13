@extends('layout')

@section('content')
<div class="container">

	@if(Auth::check())

		<div class="col-md-8">
			<div class="panel panel-default" id="newsfeed">
				<div class="panel-heading">
					Tweets
				</div>
				<div class="panel-body">
				@foreach($newsFeed as $post)
				<div class="tweet">
					<strong>{{ $post->user->username }}</strong>
					<p>{{ $post->user->updated_at }}</p>
					<p>{{ $post->body }}</p>
				</div>
				@endforeach
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="panel panel-primary">
			<div class="panel-heading">Compose Tweet</div>
			  <div class="panel-body">
				{{ Form::open(array('action'=>'PostsController@doCreate')) }}
				{{ Form::textarea('body',null, array('class'=>'form-control')) }}
				{{ Form::hidden('user_id',Auth::user()->id)}}
				<br>
				{{ Form::submit('Tweet', array('class'=>'btn btn-info')) }}
				{{ Form::close() }}
			  </div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="panel panel-default">
			<div class="panel-heading">Followers</div>
			  <div class="panel-body">
			  	@foreach(Auth::user()->followers as $follower)
				<p>{{ $follower->name }}</p>
				@endforeach
			  </div>
			</div>
		</div>

	@endif

	<div class="col-md-4">
			<div class="panel panel-default">
			<div class="panel-heading">Suggested Users</div>
			<div class="panel-body">
				@foreach($users as $user)

		

				@if(DB::table('user_follows')->where('follow_id',$user->id)->where('user_id',Auth::user()->id)->exists())

				<p>{{ $user->name }} <a class="btn btn-danger pull-right">Unfollow</a></p>

				@else

				<p>{{$user->name}} <a class="btn btn-info pull-right" href="{{ action('UsersController@follow', $user->id) }}">Follow</a></p>
				@endif
				<hr>
				@endforeach
			</div>
			</div>
	</div>
</div>

@stop

