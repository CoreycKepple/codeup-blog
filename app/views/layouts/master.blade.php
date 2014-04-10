
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>| CCK | </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,700');" rel='font'>
        <link href='/css/basis.css' rel='stylesheet'>
        <link rel="icon" type="image/png" href="/img/corey.jpg">
        
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script> 
        <script type='text/javascript' src="/js/bootbox.min.js"></script>
        @yield('topscript') 
    </head>
      <body>
        
        <div class="wrapper" >
    <div class="box">
        <div class="row">
          
            <!-- sidebar -->
            <div class="column col-sm-3" id="sidebar">
                <a class="logo" href="{{{ action('HomeController@showHome') }}}">CK</a>
                <ul class="nav" id="links">
                    <li class="active"><a href="/ck/#resume">Resume</a>
                    </li>
                    <li><a href="/ck/#portfolio">Portfolio</a>
                    </li>
                    @if(Auth::check())
                    <li><a href='{{{ action("HomeController@logout") }}}'>Logout <span class='small text-muted'>({{{ Auth::user()->email }}})</span></a></li>
                    @else
                    <li><a href='{{{ action("HomeController@showLogin") }}}'>Login</a></li>
                    @endif
                </ul>
            </div>
            <!-- /sidebar -->
          
            <!-- main -->
            <div class="column col-sm-9" id="main">
                <div class="padding">
                    <div class="full col-sm-9">
                      
                        <!-- content -->
                    @if (Session::has('successMessage'))
                     <div class="alert alert-success">{{{ Session::get('successMessage') }}}<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>
                    @endif
                    @if (Session::has('errorMessage'))
                        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>
                    @endif
					@yield('content')

                        <!-- content -->

          			</div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->
          
        </div>
    </div>
</div>        
      
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
        
    </body>
</html>