<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME') }}</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}?{{ env('APP_VERSION') }}">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}?{{ env('APP_VERSION') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}?{{ env('APP_VERSION') }}">
        @livewireStyles
    </head>
    <body class="hold-transition login-page">
        @yield('content')
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}?{{ env('APP_VERSION') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}?{{ env('APP_VERSION') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('js/adminlte.min.js') }}?{{ env('APP_VERSION') }}"></script>

        @stack('scripts')

        @livewireScripts
        <script>
            window.addEventListener('refreshComponent', () => {
                Livewire.emit('refreshComponent');
            });
        </script>
    </body>
</html>
