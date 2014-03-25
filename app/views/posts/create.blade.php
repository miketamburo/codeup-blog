@extends('layouts.master')

@section('content')
<br>
<br>
<br>
<br>
<div class="blog-post">
	<h2> Create a new post </h2>
	<form class="form-horizontal" role="form" action="{{{ action('PostsController@store') }}}" method="POST">
	  <div class="form-group">
	    <label for="title" class="col-sm-2 control-label">Title</label>
	    <div class="col-sm-8">
	      <input type="title" name="title" class="form-control" id="title" placeholder="Title" value="{{{Input::old('title')}}}">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="body" class="col-sm-2 control-label">Body</label>
	    <div class="col-sm-8">
	      <textarea class="form-control" id="body" name="body" rows="5" placeholder="body">{{{Input::old('body')}}}
	      </textarea> 
	    </div>
	  </div>
	 
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Create Post</button>
	    </div>
	  </div>
	</form>
</div>
@stop

