<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="icon" href="{{Vite::asset('resources/img/favicon.ico')}}" type="image/x-icon">

    <title>@yield('titolo')</title>
</head>

<body >
    @include("partials.header")

    <main style="background-color: black;">
        @yield('content')
    </main>

    
</body>

</html>