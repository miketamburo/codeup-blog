@extends('layouts.master')

@section('content')
<style>
#mainContent {
	margin-top: 70px;
	margin-left: 25px;
}

</style>

	@foreach ($posts as $post)
	<div class="blog-post" id="mainContent">
	    <h2 class="blog-post-title"><a href="{{{ action('PostsController@show', $post->id) }}}">{{{$post->title}}}</a></h2>
	    <p class="blog-post-meta">{{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</p>

	    <p>{{{$post->body}}}</p>    
	    
	</div><!-- /.blog-post -->
	@endforeach
	
	<div class="col-sm-offset-2 col-sm-10">
	    <a href="{{{ action('PostsController@create') }}}" type="button" class="btn btn-primary">Create Post</a>
	</div>
	{{ $posts->links() }}
	
@stop