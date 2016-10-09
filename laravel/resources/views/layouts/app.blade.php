<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>
	
	<!-- MaterializeCSS -->
	{!! MaterializeCSS::include_full() !!}
	
	<!-- App CSS -->
	<link rel="stylesheet" href="css/app.css">

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
						<div class="userView">
							<a href="#">Side nav</a>
							<a href="#">John Doe</span></a>
							<a href="#">jdandturk@gmail.com</span></a>
						</div>
					</li>

					<li><a href="#"><i class="material-icons">cloud</i>First Link With Icon</a></li>
					<li><a href="#">Second Link</a></li>
					<li>
						<div class="divider"></div>
					</li>
					<li><a class="subheader">Subheader</a></li>
					<li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
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
						<a class='dropdown-button btn' href='#' data-activates='dropdown1'>
							{{ Auth::user()->name }}</a>

						<!-- Dropdown Structure -->
						<ul id='dropdown1' class='dropdown-content'>
							<li>
								<a href="{{ url('/logout') }}" 
								onclick="event.preventDefault();document.getElementById('logout-form').submit();">
									Logout</a></li>
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
