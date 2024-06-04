{{-- navbar --}}
<header>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center p-2">
            <img src="{{ asset('img/logo.png') }}" alt="">
            <div class="d-flex align-items-center">
                <nav class="me-3">
                    <a class="text-decoration-none me-3" href="/">Beranda</a>
                    <a class="text-decoration-none me-3" href="">Sewa Lapangan</a>
                    <a class="text-decoration-none me-4" href="">Kontak</a>
                </nav>
                <div>
                    <button class="btn-outline">
                        <a class="text-decoration-none" href="{{ route('login') }}">Masuk</a>
                    </button>
                    <button class="btn-non-outline">
                        <a class="text-decoration-none" href="{{ route('register') }}">Daftar</a>
                    </button>
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hello, User
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
