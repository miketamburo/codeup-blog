@extends('layouts.master')

@section('content')
<style>
	#mainContent {
		margin-top: 70px;
		margin-left: 15px;
		margin-bottom: 170px;
	}
</style>

<div class="blog-post" id="mainContent">

	{{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}
	
		<h2 class="form-signin-heading">Please sign in</h2>
		{{ Form::label('email', 'Email Address') }}
		{{ Form::text('email', null, array('class' => 'form-control')) }}
		
		{{ Form::label('password', 'Password') }}
		{{ Form::password('password', array('class' => 'form-control')) }}

		{{ Form::label('remember', 'Remember Me') }}
		{{ Form::checkbox('remember', 'remember-me', true); }}
		
		{{ Form::submit('Sign in', array('class' => 'btn btn-lg btn-primary btn-block'))}}
		
	  
	{{ Form::close() }}
	
</div>

@stop





