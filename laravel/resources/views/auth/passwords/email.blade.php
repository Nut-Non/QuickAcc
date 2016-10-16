@extends('layouts.app') 

@section('content')
<div class="container">

	<h1 class="center font-light">Reset Password</h1>

	@if (session('status'))
	<div class="alert alert-success">
		{{ session('status') }}
	</div>
	@endif

	<form role="form" method="POST" action="{{ url('/password/email') }}">
		{{ csrf_field() }}

		<div class="input-field{{ $errors->has('email') ? ' has-error' : '' }}">
			<label for="email">E-Mail Address</label>
			<input type="email" name="email" value="{{ old('email') }}" required />
			@if ($errors->has('email'))
			<span class="help-block">
				<strong>{{ $errors->first('email') }}</strong></span> 
			@endif
		</div>

		<div class="input-field-active-label">
			<button type="submit" class="btn waves-effect">
				Send Password Reset Link
			</button>		
		</div>
	</form>

</div><!--/ .container -->
@endsection