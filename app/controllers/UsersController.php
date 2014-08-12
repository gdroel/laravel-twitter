<?php 

class UsersController extends BaseController{

	public function follow(User $user){

		//$follower = Person following the other person
		//$user = Person being followed
		$follower = Auth::user();

		$follower->follow()->save($user);

		return Redirect::action('PostsController@index');
	
	}

	public function profile(User $user){

		$posts = $user->posts()->count();
		$following = $user->follow()->count();
		$followers = $user->followers()->count();

		return View::make('users.profile',compact('user','posts','following','followers'));
	}
}