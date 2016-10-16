@extends('layouts.app') 

@section('content')
<div class="container">

	<h1 class="center font-light">Login</h1>

	<form role="form" method="POST" action="{{ url('/login') }}">
		{{ csrf_field() }}

		<div class="input-field-active-label{{ $errors->has('email') ? ' has-error' : '' }}">
			<label class="active" for="first_name">E-Mail Address</label>
			<input type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus />
			@if ($errors->has('email'))
			<span class="help-block">
				<strong>{{ $errors->first('email') }}</strong></span>
			@endif
		</div>

		<div class="input-field-active-label{{ $errors->has('password') ? ' has-error' : '' }}">
			<label class="active" for="password">Password</label>
			<input id="password" type="password" class="validate" name="password" required> 
			@if ($errors->has('password'))
			<span class="help-block">
				<strong>{{ $errors->first('password') }}</strong> </span> 
			@endif
		</div>

		<div class="input-field-active-label">
			<input type="checkbox" class="filled-in" id="remember_me" name="remember_me" />
			<label for="remember_me">Remember Me</label>
		</div>

		<div class="input-field-active-label">
			<button type="submit" class="btn waves-effect">
				Login
			</button>

			<a class="btn-flat waves-effect" href="{{ url('/password/reset') }}">
				Forgot Password
			</a>			
		</div>
	</form>

</div><!--/ .container -->
@endsection