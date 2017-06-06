<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{app_name()}} | Log in</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Styles -->
	@yield('before-styles')
	<!-- Theme style -->
	{{ Html::style(mix('css/bootstrap.css')) }}
	{{ Html::style(mix('css/backend.css')) }}
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<p><b>{{app_name()}}</b></p>
	</div>
	<div class="message">
		@include('includes.partials.messages')
	</div>
	<!-- /.login-logo -->
	@yield('content')
</div>
<!-- /.login-box -->
<!-- JavaScripts -->
@yield('before-scripts')
<!-- Main JavaScript -->
{{ Html::script(mix('js/backend.js')) }}
<!-- MOre JavaScripts -->
@yield('after-scripts')
</body>
</html>