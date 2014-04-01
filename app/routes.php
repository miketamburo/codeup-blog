<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome'); 

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::resource('posts', 'PostsController');

// testing code only - will be removed 9/1/14
// Route::get('post-test', function(){
// 	// $user = User::first();
// 	// $post = new Post;
// 	// $post->user_id= $user->id;
// 	// $post->title = 'Testing';
// 	// $post->body = '1,2,3';

// 	$post = Post::first();
// 	echo $post->user;


	


