<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>UNICEF</title>
    {{-- <link rel="icon" href="{{ asset('img/logo.png') }}?v={{ date('YmdHis') }}" /> --}}
    {{-- <link rel="icon" href="{{ URL::asset('img/logo.png') }}" type="image/x-icon"/> --}}
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo.png') }}">



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- FontAwesome -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/new-equipo.css') }}" rel="stylesheet">
    @yield('css_custom_files')
    @yield('css_custom_style')
</head>

<body>
    <div id="app">
        @include('includes.header')
        <main class="container-fluid px-0">
            @yield('content')
        </main>
        @include('includes.footer')
    </div>
</body>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('js_custom_files')
    @yield('scripts')
    <script>
        const DATA = {
            donationsXDay: @json($totales['donations'] ?? ''),
            totalDonations: @json($totales['totalDonations'] ?? '')
        }
    </script>
    @if (Route::currentRouteName() != 'register' && Route::currentRouteName() != 'login')
        <script src="{{ asset('js/new-equipo.js') }}"></script>
    @endif
</html>
