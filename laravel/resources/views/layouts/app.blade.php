<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>
	
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	
	<!-- ionicons -->
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	
	<!-- MaterializeCSS -->
	<script src="{{ URL::asset('materialize-css/js/materialize.min.js') }}"></script>
	<link rel="stylesheet" href="{{ URL::asset('materialize-css/css/materialize.min.css') }}">

	<!-- App CSS -->
	<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

	<!-- Scripts -->
	<script>
		window.Laravel = <?php echo json_encode([
			'csrfToken' => csrf_token(),
		]); ?>
	</script>
</head>
<body>

<header>
	<nav>
		<div class="nav-wrapper">
			<div class="container">
			<!-- Side nav -->
			<ul id="side-nav" class="side-nav fixed">
				<li>
					<a href="#">
						<i class="material-icons">cloud</i>
						First Link With Icon</a></li>
				<li><a href="#">Second Link</a></li>
				<li>
					<div class="divider"></div>
				</li>
				<li><a class="subheader">Subheader</a></li>
				<li><a class="waves-effect" href="#">Third Link With Waves</a></li>
			</ul>
			<!-- / Side nav -->

			<!-- Logo -->
			<a href="{{ url('/') }}" class="brand-logo">
				{{ config('app.name', 'Laravel') }}
			</a>

			<!-- Hamberger -->
			<a href="#" data-activates="side-nav" class="button-collapse">
				<i class="material-icons">menu</i></a>

			<!-- Right aligned links -->	
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				@if (Auth::guest())
					<!-- Authentication Links -->
					<li><a href="{{ url('/login') }}">Login</a></li>
					<li><a href="{{ url('/register') }}">Register</a></li>
				@else
					<!-- Dropdown Trigger -->
					<li><a class='dropdown-button' href='#' data-activates='dropdown1'>
						{{ Auth::user()->name }}</a></li>


					<!-- Dropdown Structure -->
					<ul id='dropdown1' class='dropdown-content'>
						<li>
							<a class="waves-effect" href="{{ url('/logout') }}" 
							onclick="event.preventDefault();document.getElementById('logout-form').submit();">
								Logout</a></li>

						<form id="logout-form" action="{{ url('/logout') }}" method="POST">
							{{ csrf_field() }}</form>
					</ul>
				@endif
			</ul>
			</div><!-- / .container -->
		</div>
	</nav>		
</header>

<main>
	@yield('content')	
</main>

<footer></footer>

<script>
	$(function() {
		 $(".button-collapse").sideNav();
	});
</script>

</body>
</html>
