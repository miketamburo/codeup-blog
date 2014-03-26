@extends('layouts.master')

@section('content')
<style>
#mainContent {
	margin-top: 60px;
}
</style>

	@foreach ($posts as $posts)
	<div class="blog-post" id="mainContent">
	    <h2 class="blog-post-title">New feature</h2>
	    <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

	    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>    
	    
	</div><!-- /.blog-post -->
	@endforeach

@stop