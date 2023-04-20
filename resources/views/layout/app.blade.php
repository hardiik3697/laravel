<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.meta')

    <title>Example - @yield('title')</title>

    @include('layout.styles')
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">

        @include('layout.header')

        @include('layout.navbar')
        
        <div class="content-wrapper">
            <div class="page-content fade-in-up">
                @yield('content')
            </div>
            @include('layout.footer')
        </div>
    </div>

    @include('layout.theme-config')

    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>

    @include('layout.scripts')
</body>

</html>