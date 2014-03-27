@extends('layouts.master')

@section('content')
<style>
	#mainContent {
		margin-top: 30px;
		margin-left: 25px;
	}

	h2 {
		margin-top:  70px;
		margin-left: 25px;
	}

</style>

@if (empty($posts->id))
	// create posts
	<h2> Create a new post </h2>

	{{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal')) }}

@else

	<h2> Edit Post </h2>

	{{ Form::model($posts, array('action' => array('PostsController@update', $posts->id), 'method' => 'put', 'class' => 'form-horizontal')) }}
	

@endif


<div class="blog-post" id="mainContent">
	
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
			{{ $errors->first('body','<span class="help-block"> :message</span>')  }}
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	    @if (empty($posts->id))
	    	<button type="submit" class="btn btn-primary">Create Post</button>
	    @else 	
	      	<button type="submit" class="btn btn-primary">Save Changes</button>
	    @endif
	    </div>
	  </div>


	{{ Form::close() }}
	<!-- </form> -->
</div>
<div class="col-sm-offset-2 col-sm-10">
	<a href="{{{ action ('PostsController@index')}}}" type="button" class="btn btn-primary">Return to Index</a>
</div>
@stop

