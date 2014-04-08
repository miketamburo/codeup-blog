<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function showWelcome(){
		return View::make('hello');
	}

	public function showHome(){
		return View::make('index');
	}

	public function showResume(){
		return View::make('resume');
	}

	public function showPortfolio(){
		return View::make('portfolio');
	}

	public function showLogin() {
		return View::make('login');
	}

	public function doLogin() {
		// create the validator
    	$validator = Validator::make(Input::all(), User::$signin_rules);

    	// attempt validation
    	if ($validator->fails()){
        	// validation failed, redirect with validation errors
        	$messages = $validator->messages();
        	foreach ($messages->all() as $message){
    			Session::flash('errorMessage', $message);	
        	}
    		return Redirect::back()->withInput()->withErrors($validator);
    	} else {

			// Perform Authentication
			if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
	    		return Redirect::intended('/posts');
			} else {
				Session::flash('errorMessage', 'User email or password not recognized.  Please try again.');
				return Redirect::back()->withInput()->withErrors($validator);
			}
    		
    	}

	}

	public function logout() {
		Auth::logout();
		return Redirect::action('PostsController@index');
	}

}