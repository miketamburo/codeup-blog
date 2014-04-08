@extends('layouts.master')

@section('content')
<style>
	#mainContent {
		margin-top: 30px;
		margin-left: 75px;
		width: 220px;
	}
</style>

<div class="blog-post" id="mainContent">

@if (!Auth::user())  

	<h2> Sign Up </h2>
	{{ Form::open(array('action' => 'RegisterController@store', 'class' => 'form-signin'  )) }}

@else
	<h2> Edit Profile </h2>


	{{ Form::model($user, array('action' => array('RegisterController@update', $user->id), 'method' => 'put', 'class' => 'form-horizontal' )) }}
	

@endif


	<p>{{ Form::label('first_name', 'First Name') }}
	{{ Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'First Name')) }}</p>

	<p>{{ Form::label('last_name', 'Last Name') }}
	{{ Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Last Name')) }}</p>

	<p>{{ Form::label('email', 'Email') }}
	{{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}</p>

	<p>{{ Form::label('password', 'Password') }}
	{{ Form::password('password', array('class' => 'form-control')) }}	
	
	<p>{{ Form::label('password_confirmation', 'Confirm Password') }}
	{{ Form::password('password_confirmation', array('class' => 'form-control')) }}
	
	@if (!Auth::user())
	<p>{{ Form::submit('Join', array('class' => 'btn btn-lg btn-primary btn-block'))}}</p>

	@else
	<p>{{ Form::submit('Update', array('class' => 'btn btn-lg btn-primary btn-block'))}}</p>

	@endif
	{{ Form::close() }}
	  
</div>
<div class="col-sm-offset-2 col-sm-10">
	<a href="{{{ action ('PostsController@index')}}}" type="button" class="btn btn-primary">Return to Index</a>
</div>
@stop

