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
<div class="container">
	<div class="row">
		<div class="col-sm-8 blog-main">
			<div id="formatSpacer">
				@foreach ($posts as $post)
				<div class="blog-post" id="mainContent">
				    <h2 class="blog-post-title"><a href="{{{ action('PostsController@show', $post->id) }}}">{{{$post->title}}}</a></h2>
				    <p class="blog-post-meta">{{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</p>

				    <p>{{{Str::words($post->body, 25)}}}</p>    
				    <hr>
				</div><!-- /.blog-post -->
				@endforeach
			</div>
		<div>
		    <a href="{{{ action('PostsController@create') }}}" type="button" class="btn btn-primary">Create Post</a>
		</div>
		{{ $posts->links() }}
		
		</div>

		<div class="col-sm-3 col-sm-offset-1 blog-sidebar" id="formatSpacer">
	        <div class="sidebar-module sidebar-module-inset">

	        	{{ Form::open(array('action' => array('PostsController@index'), 'method' => 'GET')) }}
		        	{{ Form::label('search', 'Blog Search') }}
		        	{{ Form::text('search')}}
		        	{{ Form::submit('Search')}}
	        	{{ Form::close() }}

	        	<br>
	            <h4>About</h4>
	            <p>This blog is dedicated to the latest news on tech developments and my ideas for applications of those developments.  If you have an idea for an application, new tech info, or a better way of doing things, please create a post.</p>
	        </div>
	    </div><!-- /.blog-sidebar -->
	</div><!-- /.row -->
</div><!-- /.container -->

@stop