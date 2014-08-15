<?php 

class UsersController extends BaseController{

	public function follow(User $user){

		//$follower = Person following the other person
		//$user = Person being followed

		if(DB::table('user_follows')->where('user_id',$user->id)->where('follow_id',Auth::user()->id)->exists()){

		echo 'u cant do dat';

		}

		else{

			$follower = Auth::user();
			$follower->follow()->save($user);
		}
		
		return Redirect::action('PostsController@index');
	
	}

	public function unFollow(User $user){

		$id = $user->id;

		$authUser = Auth::user();

		$authUser->follow()->detach($user);

		return Redirect::back();
	}

	public function profile(User $user){

		$posts = $user->posts()->count();
		$following = $user->follow()->count();
		$followers = $user->followers()->count();

		return View::make('users.profile',compact('user','posts','following','followers'));
	}

	public function followers(User $user){

		return View::make('users.followers',compact('user'));
	}
}