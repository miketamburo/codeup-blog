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

Route::get('/sayhello/{name}', 'HomeController@sayHello');

Route::get('/rolldice', function()
{	$rand = rand(1, 6);
    return View::make('roll-dice')->with('rand', $rand);   
});

Route::get('/rolldice/{guess}', 'HomeController@showRollDiceGuess');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/blog', 'HomeController@showBlog');
