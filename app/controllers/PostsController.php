<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	//examples
		// var_dump(Input::all());
		// var_dump(Input::get('name'));
		// var_dump(Input::get('name', 'Default'));
		// $name = Input::get('name');
		// $test = Input::get('test');

		// $data = array(
		// 		'name' => $name,
		// 		'test' => $test,
		// );
		// return View::make(someThing)->with($data);
		// if there is a checkbox; how do you get values
		//var_dump(Input::has('test'));
		

		Log::info('This is some useful information.');

		Log::warning('Something could be going wrong.');

		Log::error('Something is really going wrong.');

		return "Show a list of all posts.";
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Log::info(Input::all());
		return Redirect::back()->withInput();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return "This is the show action";
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "This is the edit action";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return "This is the update action";
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "This is the delete action";
	}

}