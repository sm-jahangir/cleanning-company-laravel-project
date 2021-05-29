<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('backend')}}/images/favicon.png">
    <!-- Page Title  -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('backend')}}/assets/css/dashlite.css?ver=2.1.0">
    <link id="skin-default" rel="stylesheet" href="{{asset('backend')}}/assets/css/theme.css?ver=2.1.0">
    @stack('css')
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <x-backend.sidebar />
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <x-backend.header />
                <!-- main header @e -->
                <!-- content @s -->
                @yield('MainBackendContent')
                <!-- content @e -->
                <!-- footer @s -->
                <x-backend.footer />
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{asset('backend')}}/assets/js/bundle.js?ver=2.1.0"></script>
    <script src="{{asset('backend')}}/assets/js/scripts.js?ver=2.1.0"></script>
    <script src="{{asset('backend')}}/assets/js/charts/gd-default.js?ver=2.1.0"></script>
    @stack('js')
</body>

</html>
