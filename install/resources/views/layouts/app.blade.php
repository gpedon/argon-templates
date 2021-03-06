<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

  <!-- Theme Icons -->
  <link href="{{ asset('theme/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
  <!-- Theme CSS -->
  <link href="{{ asset('theme/css/theme.min.css') }}" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  @stack('styles')

    <script>
      window.Laravel = {!! json_encode([
              'locale' => str_replace('_', '-', app()->getLocale()),
              'timezone' => auth()->user() ? auth()->user()->timezone : 'America/Sao_Paulo',
              'env' => \App::environment(),
          ]); !!}
    </script>
</head>
<body class="{{ $class ?? '' }}">
<div id="app">
  @auth()
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
    @include('layouts.navbars.sidebar')
  @endauth

  <div class="main-content" id="panel">
    @include('layouts.navbars.navbar')
    @yield('content')
  </div>

  @guest()
    @include('layouts.footers.guest')
  @endguest
</div>
<!-- JS -->
@push('scripts')
  <script src="{{ asset('js/app.js') }}"></script>
  <!-- Theme JS -->
  <script src="{{ asset('theme/js/theme.min.js') }}"></script>
@endpush

@stack('scripts')
</body>
</html>
