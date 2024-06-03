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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- trix --}}
    {{-- <link rel="stylesheet" type="text/css" href="trix.css">
    <script type="text/javascript" src="trix.umd.min.js"></script> --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script> --}}
    <script src="/ckeditor5-build-classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand navbar-light bg-light test-black-border">
        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <button class="btn px-1 py-0 open-btn me-2">
                    OPEN
                </button>
                {{-- <a class="navbar-brand me-auto" href="#">
                    <img src="images/LogoMitraku.png" alt="Mitraku" class="logo-size-sm">
                </a> --}}

            </div>
        </div>
    </nav>

    <div class="main-container d-flex">
        <div class="sidebar sidebar-rch test-black-border h6" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
                <a class="navbar-brand me-auto" href="#">
                    <img src="/images/LogoMitraku.png" alt="Mitraku" class="logo-size-sm">
                </a>
                <button class="btn d-md-none d-block close-btn px-1 py-0">
                    {{-- TODO: Ganti jadi icon --}}
                    X
                </button>
            </div>

            <ul class="list-unstyled px-2">
                <li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block">
                        ICON User</a>
                </li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block">
                        ICON Projects</a>
                </li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block">
                        ICON Mitra</a>
                </li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block">
                        ICON Blog</a>
                </li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block">
                        ICON Category</a>
                </li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block">
                        ICON Advertisement</a>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="dashboard-content px-3 pt-4">
                @yield('content')
            </div>
        </div>
    </div>
</body>


</html>
