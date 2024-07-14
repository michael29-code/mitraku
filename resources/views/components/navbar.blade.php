<nav class="navbar navbar-expand-lg sticky-top white-background mb-1">
    <div class="container mt-2">
        <a class="navbar-brand me-auto" href="{{ route('home') }}">
            <img src="images/LogoMitraku.png" alt="Mitraku" class="logo-size-sm">
        </a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link @yield('isHomeActive') mx-lg-2" aria-current="page"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('isMitraActive') mx-lg-2" href="{{ route('view-mitra') }}">Mitra</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('isBlogActive') mx-lg-2" href="{{ route('view-blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('isAdvertisementActive') mx-lg-2"
                            href="{{ route('view-advertisement') }}">Advertise</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link @yield('isPengajuanActive') mx-lg-2" href="/form-pengajuan">Pengajuan</a>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle @yield('isPengajuanActive')" href="/form-pengajuan" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Pengajuan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/form-pengajuan">Form Pengajuan</a></li>
                            <li><a class="dropdown-item" href="/view-pengajuan">History Pengajuan</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="d-flex">
            {{-- <img src="/images/profile_user.jpg" class="rounded-circle" style="width: 3rem">

            <div class="submenu-wrap">
                <div class="submenu">
                    <div class="user-info">
                        <img src="/images/profile_user.jpg" class="rounded-circle" style="width: 3rem">
                        name
                    </div>
                </div>
            </div> --}}
            {{-- here --}}
            @auth
                {{-- <img src="/images/profile_user.jpg" class="rounded-circle" style="width: 3rem"> --}}
                <div class="dropdown-center">
                    <div class="dropdown-toggle d-flex justify-content-center align-items-center" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="" style="width: 6rem; height: .01rem"></div>
                        <img src="/images/profile_user.jpg" class="rounded-circle" style="width: 3rem">
                        </img>
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="width: 15rem">

                        {{-- <li><a class="dropdown-item" href="{{ route('profile-user') }}">Profile</a></li> --}}
                        <li>
                            <a class="dropdown-item" href="{{ route('profile-user') }}">
                                <img src="/images/profile_user.jpg" class="rounded-circle" style="width: 3rem">
                                {{ Auth::user()->username }}
                            </a>
                        </li>

                        @if (Auth::user()->level == 2)
                            <li class="d-flex justify-content-center align-items-center ps-3 py-2">
                                <i class="bi bi-building-fill-add p-0"></i>
                                <a class="dropdown-item" href="{{ route('create-mitra-1') }}">Create Mitra</a>
                            </li>
                        @else
                            <li><a class="dropdown-item" href="#">Mitra Profile</a></li>
                        @endif
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form class="dropdown-item" action="{{ route('logout') }}" method="POST" style="color: red">
                                @csrf
                                <button class="btn p-0 m-0">
                                    <i class="bi bi-box-arrow-right" style="color: red"></i>
                                    Log out
                                </button>
                            </form>
                            {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                        </li>
                    </ul>
                </div>
                {{-- <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-lg btn-primary shadow" style="font-size: 1.5rem">
                        <i class="bi bi-box-arrow-right" style="color: white"></i>
                        Log out
                    </button>
                </form> --}}
            @else
                <a href="{{ route('register') }}" class="btn btn-primary shadow">Sign Up</a>
                <a href="{{ route('login') }}" class="btn btn-light shadow">Sign In</a>
            @endauth
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
