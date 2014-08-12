<?php 

class UsersController extends BaseController{

	public function follow(User $user){

	//$follower = Person following the other person
	//$user = Person being followed
	$follower = Auth::user();

	$follower->follow()->save($user);

	return Redirect::action('PostsController@index');
	
	}
}