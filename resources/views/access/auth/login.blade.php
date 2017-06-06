@extends('access.layouts.app')

@section('before-styles')
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('plugins/iCheck/square/blue.css')}}">
@endsection

@section('content')
<div class="login-box-body">
	<p class="login-box-msg">Sign in to start your session</p>

	<form action="{{route('access.auth.login')}}" method="post">
		{!! csrf_field() !!}
		<div class="form-group has-feedback">
			{{ Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
			<span class="fa fa-envelope form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			{{ Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.password')]) }}
			<span class="fa fa-lock form-control-feedback"></span>
		</div>
		<div class="row">
			<div class="col-xs-8">
				<div class="checkbox icheck">
					<label>
						{{ Form::checkbox('remember') }} {{ trans('labels.frontend.auth.remember_me') }}
					</label>
				</div>
			</div>
			<!-- /.col -->
			<div class="col-xs-4">
				<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
			</div>
			<!-- /.col -->
		</div>
	</form>
	{{ link_to_route('access.auth.password.reset', trans('labels.frontend.passwords.forgot_password')) }}
</div>
<!-- /.login-box-body -->
@endsection

@section('after-scripts')
<!-- iCheck -->
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
<script>
	$(function () {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' // optional
		});
	});
</script>
@endsection