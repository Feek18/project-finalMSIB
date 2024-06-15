{{-- navbar --}}
<header>
    <div class="fixed-top bg-white border-bottom shadow-sm" style="height: 80px;">
        <div class="navbar navbar-expand-lg d-flex justify-content-between align-items-center p-3">
            <img src="{{ asset('img/logo.png') }}" alt="" class="ms-2" style="height: 50px">
            <button class="navbar-toggler me-2 d-lg-none border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <i class="fa-solid fa-bars fa-xl"></i>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <img src="{{ asset('img/logo.png') }}" alt="" style="height: 50px">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <nav class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <a class="nav-link text-dark" href="/">Beranda</a>
                        <a class="nav-link text-dark" href="#advantage">Kenapa Kami?</a>
                        <a class="nav-link text-dark" href="#about">Tentang</a>
                        <a class="nav-link text-dark" href="{{ route('sewa') }}">Sewa Lapangan</a>
                        <a class="nav-link text-dark" href="#kontak">Kontak</a>
                    </nav>
                    <div class="d-flex align-items-center gap-2">
                        @guest
                            <button class="btn-outline border-2 rounded py-1">
                                <a class="text-decoration-none" href="{{ route('login') }}" style="color: #002379">Masuk</a>
                            </button>
                            <button class="btn-non-outline rounded py-1 me-3">
                                <a class="text-decoration-none" href="{{ route('register') }}">Daftar</a>
                            </button>
                        @endguest
                        @auth
                            <div class="dropdown">
                                <a class="nav-link
                                dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user"></i> Hello, {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('profil') }}">Profil</a></li>
                                    <li><a class="dropdown-item" href="{{ route('transaksi') }}">Transaksi</a></li>
                                    @role('admin')
                                        <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Menu admin</a></li>
                                    @endrole
                                    <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Keluar
                                        </a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
