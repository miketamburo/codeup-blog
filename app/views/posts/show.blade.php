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

#disqus_thread {
	margin-left: 15px;
	margin-right: 15px;
}

</style>

	<div class="blog-post" id="mainContent">
	    <h2 class="blog-post-title">{{{$posts->title}}}</h2>
		    @if (!empty($posts->image_path))
				<img src="{{{ $posts->image_path }}}" alt="user image">
			@endif
	    <p class="blog-post-meta">{{{$posts->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</p>
	    <p class="blog-post-meta">Written by: {{$posts->user->email}}<p>
	    <p>{{{$posts->body}}}</p> 

	    {{ Form::open(array('action' => array('PostsController@destroy', $posts->id), 'method' => 'delete', 'id'=> 'formDeletePost')) }}
	    {{ Form::close() }}
	    <p> 
	    	@if (Auth::user()->canManagePost($posts))
		    <a href="{{{ action ('PostsController@edit', $posts->id)}}}" type="button" class="btn btn-primary">Edit this post</a>

		    <a href="#" id="btnDeletePost" type="button" class="btn btn-primary">Delete this post</a>
		    @endif
		    <a href="{{{ action ('PostsController@index')}}}" type="button" class="btn btn-primary">Return to Index</a>  
	    </p>
    
	</div><!-- /.blog-post -->
	<!-- Disqus comment code inserted below -->
	<div id="disqus_thread"></div>

	<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'miketam'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
    </script>
    
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

<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'miketam'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>


@stop
