@extends('layouts.app') 

@section('content')

<div class="container">

	<h1 class="center font-light">Register</h1>
	
	<form role="form" method="POST" action="{{ url('/register') }}">
		{{ csrf_field() }}
								
		<div class="input-field{{ $errors->has('name') ? ' has-error' : '' }}">
			<label for="name">Name</label>
			<input type="text" name="name" value="{{ old('name') }}" required />
			@if ($errors->has('name'))
				<span class="help-block">
					<strong>{{ $errors->first('name') }}</strong></span> 
			@endif
		</div>		
								
		<div class="input-field{{ $errors->has('email') ? ' has-error' : '' }}">
			<label for="email">E-Mail Address</label>
			<input type="email" name="email" value="{{ old('email') }}" required />
			@if ($errors->has('email'))
				<span class="help-block">
					<strong>{{ $errors->first('email') }}</strong></span> 
			@endif
		</div>

		<div class="input-field{{ $errors->has('password') ? ' has-error' : '' }}">
			<label for="password">Password</label>
			<input id="password" type="password" class="validate" name="password" required> 
			@if ($errors->has('password'))
				<span class="help-block">
					<strong>{{ $errors->first('password') }}</strong> </span> 
			@endif
		</div>

		<div class="input-field{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
			<label for="password-confirm">Confirm Password</label>
			<input id="password-confirm" type="password" class="validate" name="password_confirmation" required> 
			@if ($errors->has('password_confirmation'))
				<span class="help-block">
					<strong>{{ $errors->first('password_confirmation') }}</strong> </span> 
			@endif
		</div>
						
		<div class="input-field-active-label">
			<button type="submit" class="btn waves-effect">
				Register
			</button>		
		</div>
	</form>
</div>
@endsection