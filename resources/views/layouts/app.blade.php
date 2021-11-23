<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ReservaJá') }}</title>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @if (session()->has('message'))
        <div class="alert alert-success">
            <div style="text-align: center">
                {{ session()->get('message') }}
            </div>
        </div>
    @endif
</head>

<body>
    <div id="app">
        <main class="py-4">
            @yield('home')
            @yield('content')
            @yield('navbardashboard')
            @yield('welcome')

            @yield('tableshome')
            @yield('inserttable')
            @yield('edittable')
<<<<<<< HEAD
            @yield('showtable')

            @yield('restauranthome')
            @yield('insertrestaurant')
            @yield('showrestaurant')
            @yield('listrestaurant')
            @yield('editrestaurant')

=======
            @yield('deletetable')
>>>>>>> parent of f259543... refactor: views tables, insert restaurant and more
        </main>
    </div>
</body>

</html>
