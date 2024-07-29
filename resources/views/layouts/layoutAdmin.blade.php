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
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <button class="btn btn-light px-1 py-0 open-btn me-3">
                    <i class="bi bi-list" style="font-size: 2rem"></i>
                </button>
                <a class="navbar-brand me-auto" href="{{ route('view-user-admin') }}">
                    <img src="/images/LogoMitraku.png" alt="Mitraku" class="logo-size-sm">
                </a>
            </div>
        </div>
    </nav>

    <div class="main-container d-flex">
        <div class="sidebar active sidebar-rch shadow-sm h6 d-flex flex-column justify-content-between" id="side_nav">
            <div class="">
                <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
                    <div class="div"></div>
                    <button class="btn d-md-none d-block close-btn px-1 py-0">
                        <i class="bi bi-x" style="font-size: 2rem"></i>
                    </button>
                </div>

                <ul class="list-unstyled px-2">
                    <li class="@yield('isViewUserActive') my-2">
                        <a href="{{ route('view-user-admin') }}" class="text-decoration-none px-3 py-2 d-block">
                            <i class="bi bi-person-circle me-2"></i>
                            User
                        </a>
                    </li>
                    <li class="@yield('isViewMitraActive') my-2">
                        <a href="{{ route('view-mitra-admin') }}" class="text-decoration-none px-3 py-2 d-block">
                            <i class="bi bi-building me-2"></i>
                            Mitra
                        </a>
                    </li>
                    <li class="@yield('isViewBlogActive') my-2">
                        <a href="{{ route('manage-blog-admin') }}" class="text-decoration-none px-3 py-2 d-block">
                            <i class="bi bi-newspaper me-2"></i>
                            Blog
                        </a>
                    </li>
                    <li class="@yield('isViewCategoryActive') my-2">
                        <a href="{{ route('manage-category-admin') }}" class="text-decoration-none px-3 py-2 d-block">
                            <i class="bi bi-ui-checks-grid me-2"></i>
                            Category
                        </a>
                    </li>
                    <li class="@yield('isViewAdvertisementActive') my-2">
                        <a href="{{ route('manage-advertisement-admin') }}"
                            class="text-decoration-none px-3 py-2 d-block">
                            <i class="bi bi-badge-ad-fill me-2"></i>
                            Advertisement
                        </a>
                    </li>
                </ul>
            </div>
            @auth
                <form action="{{ route('logout') }}" method="POST" class="mb-5">
                    @csrf
                    <hr class="my-0">
                    <button class="btn btn-light text-base border-0 my-0"
                        style="font-size: 1.5rem; color: red; width: 98%; text-align: start;border-radius: 0">
                        <i class="bi bi-box-arrow-right" style="color: red"></i>
                        Log out
                    </button>
                </form>
                {{-- <form class="dropdown-item" action="{{ route('logout') }}" method="POST" style="color: red">
                    @csrf
                    <button class="btn p-0 m-0">
                        <i class="bi bi-box-arrow-right" style="color: red"></i>
                        Log out
                    </button>
                </form> --}}
            @endauth
        </div>
        <div class="content">
            <div class="dashboard-content px-3 pt-4">
                @yield('content')
            </div>
        </div>
    </div>

    {{-- <script>
        // === SIDEBAR START ===
        document.querySelectorAll('.sidebar ul li').forEach(function(item) {
            item.addEventListener('click', function() {
                document.querySelector('.sidebar ul li.active')?.classList.remove('active');
                item.classList.add('active');
            });
        });

        document.querySelector('.close-btn').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.remove('active');
        });

        document.querySelector('.open-btn').addEventListener('click', function() {
            if (document.querySelector('.sidebar').classList.contains('active')) {
                document.querySelector('.sidebar').classList.remove('active');
            } else {
                document.querySelector('.sidebar').classList.add('active');
            }
        });

        // === SIDEBAR END ===
    </script> --}}

</body>

</html>
