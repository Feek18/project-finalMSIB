<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Logo bar -->
    <link rel="icon" type="image/png" href="img/logoaja.png">
</head>

<body style="background: #F7F7F7">

<div class="m-1 h-100 border-end border-secondary-subtle position-fixed bg-white" style="padding-top:80px; width: 250px; height: 100vh; overflow-y: auto;">
    <ul class="nav flex-column pt-3">
        <li class="nav-item px-3 ms-2 me-3 d-flex align-items-center rounded" style="background-color: #002379;">
            <i class="fa-solid fa-lg pe-2 fa-chart-simple text-light"></i>
            <a class="nav-link  text-light" href="{{ route('admin.dashboard') }}" >Dashboard</a>
        </li>
        <li class="nav-item px-3 ms-2 me-3 d-flex align-items-center rounded">
            <i class="fa-solid fa-lg pe-2 fa-user"></i>
            <a class="nav-link  text-black" href="{{ route('admin.user') }}">Pengguna</a>
        </li>
        <li class="nav-item px-3 ms-2 me-3 d-flex align-items-center rounded">
            <i class="fa-solid fa-lg pe-2 fa-calendar-days"></i>
            <a class="nav-link  text-black" href="{{ route('admin.jadwal') }}">Jadwal</a>
        </li>
        <li class="nav-item px-3 ms-2 me-3 d-flex align-items-center rounded">
            <i class="fa-solid fa-lg pe-2 fa-bell"></i>
            <a class="nav-link  text-black" href="{{ route('admin.verification') }}">Verifikasi</a>
        </li>
    </ul>
</div>

{{-- icon --}}
<script src="https://kit.fontawesome.com/7f54b23a62.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>