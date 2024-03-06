<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Option 1: Include in HTML -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

{{-- For Template --}}
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <!-- Owl Carousel Theme Default CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
        <!-- Box Icon CSS-->
        <link rel="stylesheet" href="{{asset('assets/css/boxicon.min.css')}}">
        <!-- Flaticon CSS-->
        <link rel="stylesheet" href="{{asset('assets/fonts/flaticon/flaticon.css')}}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
		<!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">  



        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia


        <!-- Back To Top Start -->
		<div class="top-btn">
			<i class='bx bx-chevrons-up bx-fade-up'></i>
		</div>
		<!-- Back To Top End -->



        <!-- jQuery first, then Bootstrap JS -->
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
		<!-- Owl Carousel JS -->
		<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
		<!-- Nice Select JS -->
		<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
		<!-- Magnific Popup JS -->
		<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
		<!-- Subscriber Form JS -->
		<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
		<!-- Form Velidation JS -->
		<script src="{{asset('assets/js/form-validator.min.js')}}"></script>
		<!-- Contact Form -->
		<script src="{{asset('assets/js/contact-form-script.js')}}"></script>
		<!-- Meanmenu JS -->
		<script src="{{asset('assets/js/meanmenu.js')}}"></script>
		<!-- Custom JS -->
		<script src="{{asset('assets/js/custom.js')}}"></script>
    </body>
</html>
