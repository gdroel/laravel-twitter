<?php

class PostsController extends BaseController{

	public function index(){

		$suggested = Auth::user()->follow()->select('users.id')->lists('id');

		$suggested = User::whereNotIn('id', $suggested)->where('id','!=', Auth::user()->id)->get();

		$posts=Post::orderBy('id','DESC');
		$users=User::all();
		$newsFeed=Post::newsFeed();
	
		return View::make('posts.index',compact('posts','users','newsFeed','suggested'));
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