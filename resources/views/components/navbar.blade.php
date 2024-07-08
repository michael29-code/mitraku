<nav class="navbar navbar-expand-lg sticky-top white-background mb-1">
    <div class="container-fluid">
        <a class="navbar-brand me-auto" href="{{ route('home') }}">
            <img src="images/LogoMitraku.png" alt="Mitraku" class="logo-size">
        </a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link @yield('isHomeActive') mx-lg-2" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('isMitraActive') mx-lg-2" href="{{ route('view-mitra') }}">Mitra</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('isBlogActive') mx-lg-2" href="{{ route('view-blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('isAdvertiseActive') mx-lg-2" href="{{ route('view-advertisement') }}">Advertise</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="d-flex">
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-lg btn-primary shadow" style="font-size: 1.5rem">
                        <i class="bi bi-box-arrow-right" style="color: white"></i>
                        Log out
                    </button>
                </form>
            @else
                <a href="{{ route('register') }}" class="btn btn-lg btn-primary shadow">Sign Up</a>
                <a href="{{ route('login') }}" class="btn btn-lg btn-light shadow">Sign In</a>
            @endauth
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
