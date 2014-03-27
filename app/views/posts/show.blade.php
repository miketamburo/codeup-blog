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
	    <p class="blog-post-meta">{{{$posts->created_at}}}></p>

	    <p>{{{$posts->body}}}</p> 

	    <h4><a href="{{{ action ('PostsController@edit', $posts->id)}}}">Edit this post</a></h4>

	    <h4><a href="{{{ action ('PostsController@index')}}}">Return to posts listings</a></h4>   
	    
	</div><!-- /.blog-post -->

@stop
