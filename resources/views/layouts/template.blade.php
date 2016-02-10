<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
        	@yield('site_name')
        </title>

        <!-- CSS And JavaScript -->
        <!-- CSS for http-->
		<link href="{{{ asset('/css/style.css') }}}" rel="stylesheet" />   
		<!-- css for secure https (NOT WORKING)
     	<link href="{{{ secure_asset('/css/style.css') }}}" rel="stylesheet">
    	-->
    	<!-- CSS for JQuery library-->
		<link href="{{{  asset('/external_libraries/Magnific-Popup-master/dist/magnific-popup.css') }}}" rel="stylesheet" />
    	
    	<!--hosted jQuery from google-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" />
		</script>
	
    </head>

    <body>
    	<!--top navigation-->
		<nav>
			<ul>
			<li><a href="{{ URL::to('/index') }}">Home</a></li>
			<li><a href="{{ URL::to('/coming_soon') }}">CS Projects</a></li>
			<li><a href="{{ URL::to('/photo') }}">Photos</a></li>
			<li><a href="{{ URL::to('/coming_soon') }}">Hobbies</a></li>
			<li><a href="{{ URL::to('/coming_soon') }}">Links</a></li>
			<li><a href="{{ URL::to('/coming_soon') }}">Disclaimer</a></li>
			<!--
			<li id="login_logout"><a href="{{ URL::to('/tasks') }}">User Account</a></li>
			-->
            <!-- Authentication Links -->
            @if (Auth::guest())
				<li id="login_logout"><a href="{{ URL::to('/tasks') }}">User Account</a></li>
            @else
            	<li id="login_logout"><a href="{{ URL::to('/tasks') }}"> {{ "Hi " . Auth::user()->name }} </a></li>
            @endif
			</ul>
		</nav>
		
		<!-- sidebar -->
    	<aside id="side_menu">
    		@yield('sidebar')
		</aside>

		<!--main contents -->
		<main id="main_content">
        	<!--page content is injected here-->
        	@yield('content')
		</main>
		
		<!-- footer -->
		<footer>Copyright <?php echo date("Y", time()); ?> by G-Productions</footer>

		<!-- javascript -->
		@yield('script')
    </body>

</html>