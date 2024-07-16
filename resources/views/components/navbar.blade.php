<nav class="navbar navbar-expand-lg sticky-top white-background mb-1">
    <div class="container mt-2">
        {{-- LOGO --}}
        <a class="navbar-brand me-auto" href="{{ route('home') }}">
            <img src="/images/LogoMitraku.png" alt="Mitraku" class="logo-size-sm">
        </a>
        {{-- BUAT OFFCANVAS (CONTENT TENGAH) --}}
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                {{-- CONTENT TENGAH --}}
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
                            href="{{ route('view-advertisement-user') }}">Advertise</a>
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
        {{-- PROFILE PICTURE / SIGN IN OR SIGN UP BUTTON --}}
        <div class="profilePictureGemink">
            @auth
                @if (Auth::user()->image == 'default')
                    <img src="/images/default_user_profile.jpg" class="rounded-circle user-profpic" id="profileImage"
                        style="width: 3.5rem">
                @else
                    <img src="{{ Auth::user()->getImageURL() }}" class="rounded-circle user-profpic" id="profileImage"
                        style="width: 3.5rem">
                @endif

                <div class="submenu-wrap" id="subMenu">
                    <div class="submenu">
                        <a href="{{ route('profile-user') }}" class="user-info text-decoration-none black">
                            <img src="{{ Auth::user()->getImageURL() }}" class="rounded-circle user-profpic"
                                id="profileImage">
                            <p class="body-large-medium">
                                {{ Auth::user()->username }}
                            </p>
                        </a>

                        <hr>

                        @if (Auth::user()->level == 2)
                            <a href="{{ route('create-mitra-1') }}" class="sub-menu-link">
                                <i class="bi bi-building-fill-add"></i>
                                <p class="body-large-medium">Create Mitra</p>
                                <i class="bi bi-caret-right p-0 m-0"></i>
                            </a>
                        @else
                            <a href="#" class="sub-menu-link">
                                <i class="bi bi-building-fill-gear"></i>
                                <p class="body-large-medium">Mitra Profile</p>
                                <i class="bi bi-caret-right p-0 m-0"></i>
                            </a>
                        @endif

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="sub-menu-link w-100" style="padding: 0; border:0; background: none;">
                                <i class="bi bi-box-arrow-right ms-1" style="color: red;"></i>
                                <p style="color: red; text-align: left">Log out</p>
                            </button>
                        </form>
                    </div>
                </div>
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
