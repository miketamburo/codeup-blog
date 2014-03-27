@extends('layouts.master')

@section('content')
<style>
#mainContent {
	margin-top: 60px;
}
</style>


	<div class="blog-post" id="mainContent">
	    <h2 class="blog-post-title">{{{$posts->title}}}</h2>
	    <p class="blog-post-meta">{{{$posts->created_at}}}<a href="#"></a></p>

	    <p>{{{$posts->body}}}</p>    
	    
	</div><!-- /.blog-post -->


@stop
