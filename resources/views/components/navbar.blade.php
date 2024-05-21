<nav class="navbar navbar-expand-lg sticky-top white-background mb-1">
    <div class="container-fluid">
        <a class="navbar-brand me-auto" href="#">
            <img src="images/LogoMitraku.png" alt="Mitraku" class="logo-size">
        </a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                {{-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5> --}}
                <a class="navbar-brand me-auto" href="#" id="offcanvasNavbarLabel">
                    <img src="images/LogoMitraku.png" alt="Mitraku" class="logo-size-sm">
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link @yield('isHomeActive') mx-lg-2" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('isMitraActive') mx-lg-2" href="#">Mitra</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('isBlogActive') mx-lg-2" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('isAdvertiseActive') mx-lg-2" href="#">Advertise</a>
                    </li>
                </ul>
            </div>
        </div>
        <form class="d-flex">
            {{-- <button class="btn btn-lg shadow blue-bg white-navbar">Sign Up</button>
            <button class="btn btn-lg shadow white-navbar-bg black">Sign In</button> --}}
            <button class="btn btn-lg btn-primary shadow">Sign Up</button>
            <button class="btn btn-lg btn-light shadow">Sign In</button>
        </form>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>


{{-- <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light mb-1">
    <div class="container-fluid m-3 d-flex justify-content-center">

        <nav class="navbar bg-light col-3">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/LogoMitraku.png" alt="Mitraku" class="logo-size">
                </a>
            </div>
        </nav>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse h5 test-black-border d-flex justify-content-around" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 test-blue-border">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Mitra
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Advertise</a>
                </li>

            </ul>
            <form class="d-flex test-green-border">
                <button class="btn btn-lg h5 shadow blue-bg white-navbar">Sign Up</button>
                <button class="btn btn-lg h5 shadow white-navbar-bg black">Sign In</button>
            </form>
        </div>
    </div>
</nav> --}}
