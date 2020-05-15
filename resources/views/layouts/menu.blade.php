
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Gestion Des Absences Des Profs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet"></link>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
    
<div class="flex-center position-ref full-height">
    
      	<div class="container-fluid main-container">
  		<div class="col-md-2 sidebar">
  			<div class="row">
	<!-- uncomment code for absolute positioning tweek see top comment in css -->
	<div class="absolute-wrapper"> </div>
	<!-- Menu -->
	<div class="side-menu">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Main Menu -->
			<div class="side-menu-container">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#"><span class="glyphicon glyphicon-dashboard"></span> <b>Dashboard</b></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-plane"></span> Profs</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-cloud"></span> Etudiant</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-cloud"></span> classes</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-cloud"></span> exmples</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-cloud"></span> expl2</a></li>
					

					<li><a href="{{ route('logout') }}"><span class="glyphicon glyphicon-off"></span> LogOut</a></li>

				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
</div>  	
</div>
  		<div class="col-md-10 content">
  			  
		  @yield('content')
	
		</div>
  		</div>
  		<footer class="pull-left footer">
  		<!--	<p class="col-md-12">
  				<hr class="divider">
  				Copyright &COPY; 2015 <a href="http://www.pingpong-labs.com">Gravitano</a>
  			</p>
              -->
  		</footer>
  	</div>	<script type="text/javascript">
	$(function () {
      $('.navbar-toggle-sidebar').click(function () {
  		$('.navbar-nav').toggleClass('slide-in');
  		$('.side-body').toggleClass('body-slide-in');
  		$('#search').removeClass('in').addClass('collapse').slideUp(200);
  	});

  	$('#search-trigger').click(function () {
  		$('.navbar-nav').removeClass('slide-in');
  		$('.side-body').removeClass('body-slide-in');
  		$('.search-input').focus();
  	});
  });	</script>
</body>
</html>
    

