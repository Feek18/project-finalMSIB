{{-- navbar --}}
<header>
    <div class="fixed-top bg-white border-bottom shadow-sm" style="height: 80px;">
        <div class="d-flex justify-content-between align-items-center p-2">
            <img src="{{ asset('img/logo.png') }}" alt="" class="ms-3 my-1" style="height: 50px">
            <div class="d-flex align-items-center">
                <nav class="me-3">
                    <a class="text-decoration-none me-3" href="/">Beranda</a>
                    <a class="text-decoration-none me-3" href="{{ route('sewa') }}">Sewa Lapangan</a>
                    <a class="text-decoration-none me-4" href="#kontak">Kontak</a>
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
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="" alt=""> Hello, {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('profil') }}">Profil</a></li>
                            <li><a class="dropdown-item" href="{{ route('transaksi') }}">Transaksi</a></li>
                            <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Keluar
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</header>

