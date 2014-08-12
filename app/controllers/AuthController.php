<?php 

class AuthController extends BaseController{

	public function showRegister(){

		return View::make('auth.register');
	}

	public function doRegister(){

		$user = new User();

		$user->name = Input::get('name');
		$user->username = Input::get('username');
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));

		$user->save();

		return Redirect::action('PostsController@index');
	}

	public function showLogin(){

		return View::make('auth.login');
	}

	public function doLogin(){

		$input = Input::all();

		$rules = array(

			'email'		=> 'required|email|',
			'password'	=> 'required|alphaNum|min:3',
		);

		$validator = Validator::make($input,$rules);

		if($validator->fails()){

			return Redirect::action('AuthController@showLogin')
				->withErrors($validator)
				->withInput(Input::except('password'));
		}
		else{

			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);
		}

		if(Auth::attempt($userdata)){

			return Redirect::action('PostsController@index');
		}

		else{

			return Redirect::action('AuthController@showLogin');
		}


	}

	public function doLogout(){

		Auth::logout();
		return Redirect::action('PostsController@index');
	}
}
