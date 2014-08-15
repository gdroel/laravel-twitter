@extends('layout')

@section('content')
<div class="container">
	<h1>Followers</h1>
	<div class="col-md-4">
	@foreach($user->followers as $follower)
	<div class="follower">

	<p>{{ $follower->name }} <span class="gray">{{ $follower->username }}</span></p>
	

	</div>
	</div>
</div>
@stop

@endforeach

