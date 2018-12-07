<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    @yield('meta')

    <meta name="description" content="Helping organisations around the world managing their volunteers, communication and work schedules.">
    <meta name="keywords" content="">

    <link href="{{ asset('favicon.png') }}" rel="icon">
    <link href="{{ asset('favicon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('favicon.png') }}" rel="apple-touch-icon" sizes="76x76"/>
    <link href="{{ asset('favicon.png') }}" rel="apple-touch-icon" sizes="120x120"/>
    <link href="{{ asset('favicon.png') }}" rel="apple-touch-icon" sizes="152x152"/>

    @include('partials.css')

    @yield('css')
</head>

<body>

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')


@include('partials.scripts')
@yield('scripts')

</body>
</html>
