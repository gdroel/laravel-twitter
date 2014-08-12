<?php

class PostsController extends BaseController{

	public function index(){

		$id=Auth::user()->id;

		$posts=Post::all();
		$users=User::all();
		$newsFeed=Post::newsFeed();

		return View::make('posts.index',compact('posts','users','newsFeed'));
	}

	public function showCreate(){

		return View::make('posts.create');
	}

	public function doCreate(){

		$post = new Post();

		$post->body = Input::get('body');
		$post->user_id = Input::get('user_id');

		$post->save();

		return Redirect::action('PostsController@index');
	}
}