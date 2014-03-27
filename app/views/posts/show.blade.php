@extends('layouts.master')

@section('content')
<style>
#mainContent {
	margin-top: 70px;
	margin-left: 25px;
}
</style>

	<div class="blog-post" id="mainContent">
	    <h2 class="blog-post-title">{{{$posts->title}}}</h2>
	    <p class="blog-post-meta">{{{$posts->created_at}}}</p>

	    <p>{{{$posts->body}}}</p> 

	    <a href="{{{ action ('PostsController@edit', $posts->id)}}}" type="button" class="btn btn-primary">Edit this post</a>
	    
	    <a href="{{{ action ('PostsController@index')}}}" type="button" class="btn btn-primary">Return to Index</a>  
	    
	</div><!-- /.blog-post -->

@stop
