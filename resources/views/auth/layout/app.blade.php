<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Example - @yield('title')</title>

    @include('auth.layout.styles')
</head>

<body class="bg-silver-300">
    <div class="content">
        @yield('content')
    </div>
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>

    @include('auth.layout.scripts')
</body>

</html>