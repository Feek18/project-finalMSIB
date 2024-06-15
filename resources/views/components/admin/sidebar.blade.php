<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .nav-item.active {
            background-color: #002379;
        }

        .nav-item.active .nav-link {
            color: #fff !important;
        }
    </style>

    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Logo bar -->
    <link rel="icon" type="image/png" href="img/logoaja.png">
    <style>
        .sidebar {
            padding-top: 80px;
            width: 250px;
        }

        @media (max-width: 992px) {
            .sidebar {
                display: none;
            }
        }
    </style>
</head>

<body style="background: #F7F7F7">

    <div class="sidebar h-100 border-end border-secondary-subtle position-fixed bg-white d-none d-lg-block">
        <ul class="nav flex-column pt-3">
            <li class="nav-item px-3 ms-2 me-3 d-flex align-items-center rounded">
                <i class="fa-solid fa-lg pe-2 fa-house"></i>
                <a class="nav-link" style="color: #282828" href="/">Beranda</a>
            </li>
            <li
                class="nav-item px-3 ms-2 me-3 d-flex align-items-center rounded {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i
                    class="fa-solid fa-lg pe-2 fa-chart-simple {{ request()->routeIs('admin.dashboard') ? 'text-light' : '' }}"></i>
                <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'text-light' : 'text-black' }}"
                    href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li
                class="nav-item px-3 ms-2 me-3 d-flex align-items-center rounded {{ request()->routeIs('admin.user') ? 'active' : '' }}">
                <i class="fa-solid fa-lg pe-2 fa-user {{ request()->routeIs('admin.user') ? 'text-light' : '' }}"></i>
                <a class="nav-link {{ request()->routeIs('admin.user') ? 'text-light' : 'text-black' }}"
                    href="{{ route('admin.user') }}">Pengguna</a>
            </li>
            <li
                class="nav-item px-3 ms-2 me-3 d-flex align-items-center rounded {{ request()->routeIs('admin.lapangan') ? 'active' : '' }}">
                <i
                    class="fa-solid fa-lg pe-2 fa-calendar-days {{ request()->routeIs('admin.lapangan') ? 'text-light' : '' }}"></i>
                <a class="nav-link {{ request()->routeIs('admin.lapangan') ? 'text-light' : 'text-black' }}"
                    href="{{ route('admin.lapangan') }}">Lapangan</a>
            </li>
            <li
                class="nav-item px-3 ms-2 me-3 d-flex align-items-center rounded {{ request()->routeIs('admin.jadwal') ? 'active' : '' }}">
                <i
                    class="fa-solid fa-lg pe-2 fa-calendar-days {{ request()->routeIs('admin.jadwal') ? 'text-light' : '' }}"></i>
                <a class="nav-link {{ request()->routeIs('admin.jadwal') ? 'text-light' : 'text-black' }}"
                    href="{{ route('admin.jadwal') }}">Jadwal</a>
            </li>
            <li
                class="nav-item px-3 ms-2 me-3 d-flex align-items-center rounded {{ request()->routeIs('admin.verification') ? 'active' : '' }}">
                <i
                    class="fa-solid fa-lg pe-2 fa-bell {{ request()->routeIs('admin.verification') ? 'text-light' : '' }}"></i>
                <a class="nav-link {{ request()->routeIs('admin.verification') ? 'text-light' : 'text-black' }}"
                    href="{{ route('admin.verification') }}">Verifikasi</a>
            </li>
            <li class="nav-item px-3 ms-2 me-3 d-flex align-items-center rounded">
                @guest
                    <button class="btn-outline border-2 rounded py-1">
                        <a class="text-decoration-none" href="{{ route('login') }}" style="color: #002379">Masuk</a>
                    </button>
                    <button class="btn-non-outline rounded py-1 me-3">
                        <a class="text-decoration-none" href="{{ route('register') }}">Daftar</a>
                    </button>
                @endguest
                @auth
                    <div class="dropdown w-100">
                        <a class="nav-link d-flex align-items-center dropdown-toggle w-100 px-0" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #282828;">
                            <i class="fa-solid fa-user fa-lg pe-4"></i>
                            <span>Hello, {{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('profil') }}">Profil</a></li>
                            <li><a class="dropdown-item" href="{{ route('transaksi') }}">Transaksi</a></li>
                            @role('admin')
                                <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Menu admin</a></li>
                            @endrole
                            <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                @endauth
            </li>
        </ul>
    </div>


    {{-- mobile view --}}
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbarAdmin"
        aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <img src="{{ asset('img/logo.png') }}" alt="" class="ms-2 me-3" style="height: 50px">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav flex-column pt-3">
                <!-- Same content as the sidebar -->
                <li class="nav-item px-3 ms-2 me-3 d-flex align-items-center rounded">
                    <i class="fa-solid fa-lg pe-2 fa-house"></i>
                    <a class="nav-link" style="color: #282828" href="/">Beranda</a>
                </li>
                <li
                    class="nav-item px-3 ms-2 me-3 d-flex align-items-center rounded {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i
                        class="fa-solid fa-lg pe-2 fa-chart-simple {{ request()->routeIs('admin.dashboard') ? 'text-light' : '' }}"></i>
                    <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'text-light' : 'text-black' }}"
                        href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li
                    class="nav-item px-3 ms-2 me-3 d-flex align-items-center rounded {{ request()->routeIs('admin.user') ? 'active' : '' }}">
                    <i
                        class="fa-solid fa-lg pe-2 fa-user {{ request()->routeIs('admin.user') ? 'text-light' : '' }}"></i>
                    <a class="nav-link {{ request()->routeIs('admin.user') ? 'text-light' : 'text-black' }}"
                        href="{{ route('admin.user') }}">Pengguna</a>
                </li>
                <li
                    class="nav-item px-3 ms-2 me-3 d-flex align-items-center rounded {{ request()->routeIs('admin.lapangan') ? 'active' : '' }}">
                    <i
                        class="fa-solid fa-lg pe-2 fa-calendar-days {{ request()->routeIs('admin.lapangan') ? 'text-light' : '' }}"></i>
                    <a class="nav-link {{ request()->routeIs('admin.lapangan') ? 'text-light' : 'text-black' }}"
                        href="{{ route('admin.lapangan') }}">Lapangan</a>
                </li>
                <li
                    class="nav-item px-3 ms-2 me-3 d-flex align-items-center rounded {{ request()->routeIs('admin.jadwal') ? 'active' : '' }}">
                    <i
                        class="fa-solid fa-lg pe-2 fa-calendar-days {{ request()->routeIs('admin.jadwal') ? 'text-light' : '' }}"></i>
                    <a class="nav-link {{ request()->routeIs('admin.jadwal') ? 'text-light' : 'text-black' }}"
                        href="{{ route('admin.jadwal') }}">Jadwal</a>
                </li>
                <li
                    class="nav-item px-3 ms-2 me-3 d-flex align-items-center rounded {{ request()->routeIs('admin.verification') ? 'active' : '' }}">
                    <i
                        class="fa-solid fa-lg pe-2 fa-bell {{ request()->routeIs('admin.verification') ? 'text-light' : '' }}"></i>
                    <a class="nav-link {{ request()->routeIs('admin.verification') ? 'text-light' : 'text-black' }}"
                        href="{{ route('admin.verification') }}">Verifikasi</a>
                </li>
                <li class="nav-item px-3 ms-2 me-3 d-flex align-items-center rounded">
                    @guest
                        <button class="btn-outline border-2 rounded py-1">
                            <a class="text-decoration-none" href="{{ route('login') }}" style="color: #002379">Masuk</a>
                        </button>
                        <button class="btn-non-outline rounded py-1 me-3">
                            <a class="text-decoration-none" href="{{ route('register') }}">Daftar</a>
                        </button>
                    @endguest
                    @auth
                        <div class="dropdown w-100">
                            <a class="nav-link d-flex align-items-center dropdown-toggle w-100 px-0" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #282828;">
                                <i class="fa-solid fa-user fa-lg pe-4"></i>
                                <span>Hello, {{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('profil') }}">Profil</a></li>
                                <li><a class="dropdown-item" href="{{ route('transaksi') }}">Transaksi</a></li>
                                @role('admin')
                                    <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Menu admin</a></li>
                                @endrole
                                <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                    @endauth
                </li>
            </ul>
        </div>
    </div>




    {{-- icon --}}
    <script src="https://kit.fontawesome.com/7f54b23a62.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        const checkbox = document.getElementById("menu-checkbox");
        const sidebar = document.getElementsByClassName("sidebar")[0];

        checkbox.addEventListener('change', function() {
            if (this.checked) {
                sidebar.classList.add('show');
            } else {
                sidebar.classList.remove('show');
            }
        });
    </script>
</body>

</html>
