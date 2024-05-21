<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


</head>

<body>
    <div class="d-flex">
        <div class="col-2" style="height:100vh">
            @include('components.sideBar')
        </div>
            <div class="col-10 flex-column align-items-center justify-content-center">
                @yield('content')
            </div>
    </div>
</body>

</html>
