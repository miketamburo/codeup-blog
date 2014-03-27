@extends('layouts.master')

@section('content')
<style>
	#mainContent {
		margin-top: 70px;
		margin-left: 15px;
	}
</style>
<div class="blog-post" id="mainContent">
	<h2> Create a new post </h2>
	<form class="form-horizontal" role="form" action="{{{ action('PostsController@store') }}}" method="POST">
	  <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
	    <label for="title" class="col-sm-2 control-label">Title</label>
	    <div class="col-sm-8">
	      	<input type="title" name="title" class="form-control" id="title" placeholder="Title" value="{{{Input::old('title')}}}">
			{{$errors->has('title') ? $errors->first('title','<p><span class="help-block"> :message</span></p>') : ''}}
	    </div>
	  </div>

	  <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
	    <label for="body" class="col-sm-2 control-label">Body</label>
	    <div class="col-sm-8">
	      	<textarea class="form-control" id="body" name="body" rows="5" placeholder="Body">{{{Input::old('body')}}}</textarea> 
	    	{{$errors->has('body') ? $errors->first('body','<p><span class="help-block"> :message</span></p>') : ''}}
	    </div>
	  </div>
	 
	  <p></p>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-primary">Create Post</button>
	    </div>
	  </div>
	</form>
</div>
@stop

