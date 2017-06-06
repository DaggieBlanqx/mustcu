<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
    <meta charset="utf-8">
    <title>@yield('title', app_name())</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Meta -->
    <meta name="description" content="@yield('meta_description', 'Default Description')">
    <meta name="author" content="@yield('meta_author', 'Eric Kirima')">
    @yield('meta')
    <!-- Styles -->
    @yield('before-styles')
    <!-- Theme style -->
    {{ Html::style(mix('css/bootstrap.css')) }}
    {{ Html::style(mix('css/backend.css')) }}
    <!-- styles -->
    @yield('after-styles')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Scripts -->
    <script>
        window.Laravel = { 'csrfToken': '{{ csrf_token() }}' };
    </script>
</head>
<body class="hold-transition skin-red-light {{ config('backend.layout') }}">
<!-- logged in as block -->
@include('includes.partials.logged-in-as')
<div class="wrapper">
    @include('frontend.includes.header')
    @include('frontend.includes.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('page-header')
            {!! Breadcrumbs::renderIfExists() !!}
        </section>
        <!-- Main content -->
        <section class="content">
            @include('includes.partials.messages')
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    @include('frontend.includes.footer')
</div><!-- ./wrapper -->
<!-- JavaScripts -->
@yield('before-scripts')
<!-- Main JavaScript -->
{{ Html::script(mix('js/backend.js')) }}
<!-- MOre JavaScripts -->
@yield('after-scripts')
</body>
</html>
