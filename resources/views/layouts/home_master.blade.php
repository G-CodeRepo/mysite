<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
        	@yield('site_name')
        </title>

        <!-- CSS And JavaScript -->
        <!-- CSS for http-->
		<!-- <link href="{{{ asset('/css/style.css') }}}" rel="stylesheet" /> -->
		<link href="{{ elixir('css/all.css') }}" rel="stylesheet"/>
		<!-- css for secure https (NOT WORKING)
     	<link href="{{{ secure_asset('/css/style.css') }}}" rel="stylesheet">
    	-->
    	<!-- CSS for JQuery library-->
		<link href="{{  asset('/external_libraries/Magnific-Popup-master/dist/magnific-popup.css') }}" rel="stylesheet" />
    	
    	<!--hosted jQuery from google-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
		</script>
	
    </head>

    <body>
		<!--top navigation-->
		<nav>
			<ul>
				<li><a href="{{ URL::to('/index') }}">Home</a></li>
				<li><a href="{{ URL::to('/coming_soon') }}">CS Projects</a></li>
				<li>
					<div class="dropdown">
						<a href="{{ URL::to('/gallery') }}">Gallery</a>
						<div class="dropdown-content">
							<a href="{{ URL::to('/coming_soon') }}">All</a>
							<a href="{{ URL::to('/coming_soon') }}">Hawaiian Islands</a>
							<a href="{{ URL::to('/coming_soon') }}">Music</a>
							<a href="{{ URL::to('/coming_soon') }}">Basketball</a>
							<a href="{{ URL::to('/coming_soon') }}">Car</a>
							<a href="{{ URL::to('/coming_soon') }}">Art</a>
						</div>
					</div>
				</li>
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


		<!--main contents -->
		<main id="main_content">
        	<!--page content is injected here-->
        	@yield('content')
		</main>
		
		<!-- footer -->
		<footer>Copyright <?php echo date("Y", time()); ?> by G-Productions</footer>

		<!-- javascript -->
		<script type="text/javascript" src="{{ elixir('js/all.js') }}"></script>
		<!-- (optional) javascript specific to a page-->
		@yield('script')
    </body>

</html>