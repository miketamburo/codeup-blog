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
		<input name="email" type="email" class="form-control" placeholder="Email address" required autofocus>
		<input name="password" type="password" class="form-control" placeholder="Password" required>
		<label class="checkbox">
			<input name="remember" type="checkbox" value="remember-me" checked> Remember me
		</label>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	  
	{{ Form::close() }}
	
</div>

@stop





