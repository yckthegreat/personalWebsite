<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
	<title>yckthegreat</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{asset('vendors/bootstrap/css/bootstrap.css')}}">

    <!-- Hover CSS -->
    <link rel="stylesheet" href="{{asset('vendors/hover/hover.css')}}">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|PT+Sans|Roboto+Mono|Rock+Salt" rel="stylesheet">
	
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!-- JQuery -->
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
</head>
<body>
	
    <!-- Webpage fixed frame decoration-->
	<div class="fixed-frame-deco">
	</div>
    
    @include('components.navbar')
    <div class="container">
        
        
        @yield('content')

    </div>
    
</body>

<script>
    $(document).ready(function() {
        
        /* Navbar Toggle Animation */
        $('.navbar-toggle').click(function() {

            // Transition Toggle
            $('.navbar-toggle').toggleClass('clicked');

            setTimeout(function() {
                $('.navbar-toggle').toggleClass('clicked');
            }, 500)

            // Overlay
            $('.overlay').toggleClass('hidden');

            // Animate Menu Opening
            $('.navbar-close, .navbar-items').toggleClass('hidden');
        })

        $('.navbar-close').click(function() {

            $('.navbar-close, .navbar-items').toggleClass('hidden');
            $('.overlay').toggleClass('hidden');
        })
    })
</script>
</html>