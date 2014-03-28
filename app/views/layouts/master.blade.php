<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Michael Tamburo">
    @yield('meta-data')

	<title>@yield('title')</title>

	<link href="/css/bootstrap-3.1.1/css/bootstrap.min.css" rel="stylesheet" >
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

	@yield('topscript')
 
</head>
<body>  
    <div class="navbar-wrapper">  
      <div class="container">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          
          <div class="container">

            <div class="navbar-header">
              </button><a class="navbar-brand" href="mailto:michael.tamburo@gmail.com">Michael Tamburo</a>
            </div>
            <!-- End of navbar header ===========-->
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="{{{action('HomeController@showPortfolio')}}}">Portfolio</a></li>
                <li><a href="{{{action('HomeController@showPortfolio')}}}#skills">Skills</a></li>
                <li><a href="{{{action('HomeController@showResume')}}}">Resum&#233</a></li>
                <li><a href="{{{action('HomeController@showPortfolio')}}}#experience">Experience</a></li>
                <li><a href="{{{action('HomeController@showBlog')}}}">Blog</a></li>
                <li><a href="{{{action('HomeController@showPortfolio')}}}#contact">Contact</a></li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
		          <li>
		            <a href="https://github.com/miketamburo/codeup_exercises">
		              <i class="fa fa-github-square fa-2x"></i>
		            </a>
		          </li>
		          <li>
		            <a href="http://www.facebook.com/">
		              <i class="fa fa-facebook-square fa-2x"></i>
		            </a>
		          </li>
		          <li>
		            <a href="http://www.twitter.com/">
		              <i class="fa fa-twitter-square fa-2x"></i>
		            </a>
		          </li>
		          <li>
		            <a href="http://www.linkedin.com/">
		              <i class="fa fa-linkedin-square fa-2x"></i>
		            </a>
		          </li>
		          <li>
		            <a href="mailto:michael.tamburo@gmail.com">
		              <i class="fa fa-envelope fa-2x"></i>
		            </a>
		          </li>
          	  </ul>

            </div>
            <!-- End of navbar collapse info ===========-->
          </div><!-- /. container ========-->
        </div>
        <!-- End of Navbar features ================-->
      </div>
    </div><!-- End of Navbar Wrapper =================--> 
 	
    @yield('content')

    <footer>
        <p><a href="#">&nbsp;Back to top</a></p>
        <p>&nbsp;&copy; 2014 Michael Tamburo All rights reserved.</p>
    </footer>
    <link href="/js/jquery.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/css/bootstrap-3.1.1/js/bootstrap.min.js"></script>
    <script src="/css/bootstrap-3.1.1/docs/assets/js/docs.min.js"></script>
    @yield('bottomscript')
</body>
</html>