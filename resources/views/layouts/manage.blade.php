<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AdvanceBlog - Management</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    @include('includes.nav')
    <div id="app">
        @if (Session::has('success'))
	        <p class="alert alert-success"><b>Success:</b> &nbsp; {{ Session::get('success') }}</p>
        @endif
        @if (Session::has('error'))
	        <p class="alert alert-danger"><b>Error:</b> &nbsp; {{ Session::get('error') }}</p>
        @endif
        <div class="container m-t-50">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    @include('includes.sidenav')
                </div>
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
