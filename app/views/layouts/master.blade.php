<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>CCK | Resume</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,700');" rel='font'>
        <link href='/css/basis.css' rel='stylesheet'>  
    </head>
      <body>
        
        <div class="wrapper" >
    <div class="box">
        <div class="row">
          
            <!-- sidebar -->
            <div class="column col-sm-3" id="sidebar">
                <a class="logo" href="{{{ action('HomeController@showHome') }}}">CK</a>
                <ul class="nav" id="links">
                    <li class="active"><a href="/hp/#resume">Resume</a>
                    </li>
                    <li><a href="/hp/#portfolio">Portfolio</a>
                    </li>
                </ul>
            </div>
            <!-- /sidebar -->
          
            <!-- main -->
            <div class="column col-sm-9" id="main">
                <div class="padding">
                    <div class="full col-sm-9">
                      
                        <!-- content -->

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