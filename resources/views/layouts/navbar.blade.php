{{-- navbar --}}
<header>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center p-2">
            <img src="{{ asset('img/logo.png') }}" alt="">
            <div class="d-flex align-items-center">
                <nav class="me-3">
                    <a class="text-decoration-none me-3" href="/">Beranda</a>
                    <a class="text-decoration-none me-3" href="{{ route('sewa') }}">Sewa Lapangan</a>
                    <a class="text-decoration-none me-4" href="">Kontak</a>
                </nav>
                <div class="d-flex align-items-center gap-2">
                    <button class="btn-outline">
                        <a class="text-decoration-none" href="{{ route('login') }}">Masuk</a>
                    </button>
                    <button class="btn-non-outline">
                        <a class="text-decoration-none" href="{{ route('register') }}">Daftar</a>
                    </button>
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> Hello, User
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><a class="dropdown-item" href="#">Transaksi</a></li>
                        <li><a class="dropdown-item text-danger" href="#">Keluar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
