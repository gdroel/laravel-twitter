<?php

class Post extends Eloquent{

	public function user(){

		return $this->belongsTo('User');
	}

	public static function newsFeed(){

		$posts = Post::whereIn('user_id', function($query)

			{
			  $query->select('follow_id')
			        ->from('user_follows')
			        ->where('user_id', Auth::user()->id);
			})->orWhere('user_id', Auth::user()->id)->orderBy('id','DESC')->get();

		return $posts;

	}
}