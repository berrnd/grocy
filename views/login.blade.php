@extends('layout.default')

@section('title', $L('Login'))
@section('viewJsName', 'login')

@section('content')
<div class="row">
	<div class="col-lg-6 offset-lg-3 col-xs-12">
		<h1 class="text-center">@yield('title')</h1>

		<form method="post" action="{{ $U('/login') }}" id="login-form" novalidate>

			<div class="form-group">
				<label for="name">{{ $L('Username') }}</label>
				<input type="text" class="form-control" required id="username" name="username">
				<div class="invalid-feedback"></div>
			</div>

			<div class="form-group">
				<label for="name">{{ $L('Password') }}</label>
				<input type="password" class="form-control" required id="password" name="password">
				<div id="login-error" class="form-text text-danger d-none"></div>
			</div>

			<div class="checkbox">
				<label for="stay_logged_in">
					<input type="checkbox" id="stay_logged_in" name="stay_logged_in"> {{ $L('Stay logged in permanently') }}
					<p id="qu-conversion-info" class="form-text text-muted small my-0">{{ $L('When not set, you will get logged out at latest after 30 days') }}</p>
				</label>
			</div>

			<button id="login-button" class="btn btn-success">{{ $L('OK') }}</button>

		</form>
	</div>
</div>
@stop
