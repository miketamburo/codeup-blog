@extends('layouts.master')

@section('meta-data')
    <meta name="description" content="Michael Tamburo's Portfolio">
@stop

@section('title')
	Michael Tamburo's Portfolio
@stop

@section('topscript')
    <link href="/css/bootstrap-3.1.1/docs/examples/carousel/carousel.css" rel="stylesheet">
	  <link href="/css/portfolio_site.css" rel="stylesheet"> 
@stop

@section('content')
	<!-- Carousel ============================================================================ -->
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active">
          <img src="img/.jpg" alt="Elite">
          <div class="container">
            <div class="carousel-caption">
              <h1>Elite</h1>
              <p class="shadow">Proven Performance - Dependible Execution.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/space_shuttle.jpg" alt="Creative">
          <div class="container">
            <div class="carousel-caption">
              <h1>Creative</h1>
              <p class="shadow">Trusted with high profile operations.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/fighter_pilot.jpg" alt="Experience">
          <div class="container">
            <div class="carousel-caption">
              <h1>Experience</h1>
              <p class="shadow">Forward thinking - Bringing technologies together for a greater purpose.</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

    </div><!-- Carousel End ============================================-->

    <!-- Wrapper container to center all the content. =========================================-->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">

        <div class="col-lg-4">
          <img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>PHP</h2>
          <p>PHP projects.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>Javascript</h2>
          <p>Javascript examples.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>MySQL</h2>
          <p>Integration of data bases, eloquent, Laravel, and ingenuity.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

      </div><!-- /.row -->

      <!-- START OF THE FEATURETTES =========================================-->
      <p><a id="profile"></a></p>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Solution Examples.<br> <span class="text-muted">Explore for yourself.</span></h2>
          <p class="lead"> Experienced in exploring the ream of the possible and bringing it to reality quickly.</p>
        </div>
      </div>
      
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Lead Technical Application Developer and Subject Matter Expert.<br><span class="text-muted">Well versed on several areas of operation.</span></h2>
          <p class="lead">Exec.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <p><a id="experience"></a></p>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Experience.<br><span class="text-muted">See for yourself.</span></h2>
          <p class="lead">I have an extremely unique technical background with years of hands-on experience.</p>
        </div>
      </div>
      <p><a id="skills"></a></p>
      <hr class="featurette-divider">
      <!-- radial progress circle ============ -->
      <div class="row">
        <div class="col-md-2">
          <span class="chart" data-percent="95">
            <span class="percent"></span>
              <h3>Skills</h3>
            <canvas height="150" width="150">
          </span>
        </div>
      </div>
        <div class="wrapper" data-anim="base wrapper">
            <div class="circle" data-anim="base left"></div>
            <div class="circle" data-anim="base right"></div>
        </div>
      <!-- radial progress circle ============ -->

      <p><a id="contact"></a></p>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Let's communicate.<br> <span class="text-muted">Request my resum&#233.</span></h2>
          <p class="lead">I am always interested in working with motivated teams that are also interested in creating new and brilliant solutions.  Contact me if you need a subject matter expert in the fields of aviation, strategic operations, and rapid prototyping.</p>
        </div>
        <div class="col-md-5">
          <!-- Contact Form ============================= -->
            {{ Form::open(array()) }}
            {{ Form::label('yourName', 'Your name', array('class' => 'col-sm-5 control-label')) }}
            {{ Form::text('yourName')}}<br>
            {{ Form::label('requestMessage', 'Request Message', array('class' => 'col-sm-5 control-label')) }}
            {{ Form::textarea('body', null, array('class' => 'form-control', 'row' => '5')) }}
            {{ Form::submit('Submit Request')}}
            {{ Form::close() }}

            {{ Form::open(array('action' => array('PostsController@index'), 'method' => 'GET')) }}
                    {{ Form::label('search', 'Blog Search') }}
                    {{ Form::text('search')}}
                    {{ Form::submit('Search')}}
                {{ Form::close() }}
      
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES ========================================-->
      



@stop

@section('bottomscript')
  
@stop