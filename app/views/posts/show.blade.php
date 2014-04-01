@extends('layouts.master')

@section('content')
<style>
.btn {
	margin-bottom: 5px;
}

#mainContent {
	margin-top: 70px;
	margin-left: 25px;
}

</style>

	<div class="blog-post" id="mainContent">
	    <h2 class="blog-post-title">{{{$posts->title}}}</h2>
	    <p class="blog-post-meta">{{{$posts->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</p>
	    <p class="blog-post-meta">Written by: {{$posts->user->email}}<p>
	    <p>{{{$posts->body}}}</p> 

	    {{ Form::open(array('action' => array('PostsController@destroy', $posts->id), 'method' => 'delete', 'id'=> 'formDeletePost')) }}
	    {{ Form::close() }}
	    <p> 
		    <a href="{{{ action ('PostsController@edit', $posts->id)}}}" type="button" class="btn btn-primary">Edit this post</a>

		    <a href="#" id="btnDeletePost" type="button" class="btn btn-primary">Delete this post</a>

		    <a href="{{{ action ('PostsController@index')}}}" type="button" class="btn btn-primary">Return to Index</a>  
	    </p>

	</div><!-- /.blog-post -->
@stop

@section('bottomscript')
<script>
	$('#btnDeletePost').on('click', function(e) {
		e.preventDefault();
		if (confirm('Are you sure you want to delete this post?')){
			$('#formDeletePost').submit();
		} 
	});
</script>

@stop
