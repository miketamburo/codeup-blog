@extends('layouts.master')

@section('content')
<style>
#mainContent {
	margin-top: 20px;
	margin-left: 25px;
	margin-right: 25px;
}

#formatSpacer {
	margin-top: 70px;
}

</style>
<div class="col-sm-8 blog-main">
	<div id="formatSpacer">
		@foreach ($posts as $post)
		<div class="blog-post" id="mainContent">
		    <h2 class="blog-post-title"><a href="{{{ action('PostsController@show', $post->id) }}}">{{{$post->title}}}</a></h2>
		    <p class="blog-post-meta">{{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</p>

		    <p>{{{Str::words($post->body, 50)}}}</p>    
		    <hr>
		</div><!-- /.blog-post -->
		@endforeach
	</div>
	
</div>
	<div class="col-sm-offset-2 col-sm-10">
	    <a href="{{{ action('PostsController@create') }}}" type="button" class="btn btn-primary">Create Post</a>
	</div>
	{{ $posts->links() }}
	
@stop