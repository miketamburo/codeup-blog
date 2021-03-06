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

	{{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal')) }}
	
	  <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
	    
	    {{ Form::label('title', 'Title', array('class' => 'col-sm-2 control-label')) }}
	    <div class="col-sm-8">
			{{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Title')) }}
			{{ $errors->first('title','<span class="help-block"> :message</span>') }}
	    </div>
	  </div>

	  <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
	    {{ Form::label('body', 'Body', array('class' => 'col-sm-2 control-label')) }}
	    <div class="col-sm-8">
			{{ Form::textarea('body', null, array('class' => 'form-control', 'row' => '5')) }}
			{{ $errors->has('body') ? $errors->first('body','<span class="help-block"> :message</span>') : ''}}
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-primary">Create Post</button>
	    </div>
	  </div>
	{{ Form::close() }}
	<!-- </form> -->
</div>

<h4><a href="{{{ action ('PostsController@index')}}}">Return to posts listings</a></h4> 
@stop

