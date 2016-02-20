<!DOCTYPE html>
<html>
    <!-- THIS IS A TEMPORARY TEMPLATE FOR TESTING. ALL TEMPLATES SHOULD BE IN THE LAYOUTS FOLDER -->

    <head>
        <title>My Gallery App</title>
        <!--  <link rel="stylesheet" type="text/css" href="{{ url(elixir('css/all.css')) }}"/> -->
        <link rel="stylesheet" type="text/css" href="{{ url('styleAndScriptOverride/css/bootstrap-material-design.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('styleAndScriptOverride/css/ripples.css') }}" />
                <script type="text/javascript">
            // store the base URL  to refer to (e.g. homepage '/' when using with Ajax calls)
            var baseURL = "{{ url('/') }}";
        </script>
    </head>
    <body>
    <div class="container">
        @yield('content')
    </div>
    <!-- jQuery Libraries from Google server -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- Script from elixir -->
    <!-- <script type="text/javascript" src="{{ url(elixir('js/all.js')) }}"></script> -->
	<script type="text/javascript" src="{{ url('styleAndScriptOverride/js/ripples.js') }}"></script>
	<script type="text/javascript" src="{{ url('styleAndScriptOverride/js/material.js') }}"></script>
    </body>
</html>