@extends('layout')

@section('content')
<div class="container">

	@if(Auth::check())
		<?php $i=0; ?>
		@foreach($newsFeed as $post)
		

        <div class="col-md-3 movedown">
            <div class="circleBase type1">
              <p class="hidetext">{{ $post->body }}</p>
              <hr size="10">
              <strong class="gray hidetext">{{ $post->user->name }}</strong>
            </div>
           <div class="circleBase overlay">
              <p class="date">{{ $post->updated_at }}</p>
              <hr>
              <p class="date"><a href="{{ action('UsersController@profile', $post->user->id) }}">{{ $post->user->name }}</a></p>
            </div>
        </div>

		<?php $i++; ?> 
		@endforeach
		


	@endif

</div>


@stop

