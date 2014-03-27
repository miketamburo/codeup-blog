@extends('layouts.master')

@section('content')
<style>
#mainContent {
	margin-top: 60px;
}
</style>

	<div class="blog-post" id="mainContent">
	    <h2 class="blog-post-title">{{{$posts->title}}}</h2>
	    <p class="blog-post-meta">{{{$posts->created_at}}}></p>

	    <p>{{{$posts->body}}}</p> 

	    <h3><a href="{{{ action ('PostsController@index')}}}">Return to posts listings</a></h3>   
	    
	</div><!-- /.blog-post -->

@stop
