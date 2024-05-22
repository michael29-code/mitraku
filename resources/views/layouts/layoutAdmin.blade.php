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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    {{-- trix --}}
    {{-- <link rel="stylesheet" type="text/css" href="trix.css">
    <script type="text/javascript" src="trix.umd.min.js"></script> --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script> --}}
    <script src="ckeditor5-build-classic/ckeditor.js"></script>
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
