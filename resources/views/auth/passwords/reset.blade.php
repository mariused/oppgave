@extends('layout/layout')

@section('content')
	<div class="row marketing">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default" style="margin-top:50px">
				<div class="panel-heading">Reset Password</div>
				
				<div class="panel-body">
					<form method="POST" action="/password/reset">
						{{ csrf_field() }}
						<input type="hidden" name="token" value="{{ $token }}">
						<label for="email">Email-adresse:</label>
						<input type="email" name="email" class="form-control" value="{{ $email }}" required><br>
						<label for="password">Nytt passord:</label>
						<input type="password" name="password" class="form-control{{ $errors->has('password') ? ' has-error' : '' }}"><br>
						<label for="password_confirmation">Bekreft passord:</label>
						<input type="password" name="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
						<br><button type="submit" class="btn btn-primary">Reset passord</button>
						@include ('layout.errors')
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection 