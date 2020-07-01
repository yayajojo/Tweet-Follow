<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <section class='px-8 py-4'>
            <header class='container mx-auto'>
                <img src="/images/logo.png" alt="Tweety ">
                <h1 class="text-left text-lg font-bold">
                    Tweety
                </h1>
            </header>
        </section>

        <section class="px-4">
            <main class="py-4">

            <div class="lg:flex lg:justify-between">
    <div class="lg:w-1/6 px-20">
        @include('_sidebar-links')
    </div>
    <div class="lg:flex-1 lg:mx-10 " style="max-width: 700px;">
        @yield('content')
    </div>
    <div class="lg:w-1/4 bg-green-400 bg-opacity-75 p-5 mx-8 rounded">
        @include('_friends-list')
    </div>
</div>
            </main>
        </section>

    </div>
</body>

</html>