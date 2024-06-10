<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Lapangan | Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
</head>

<body>

    {{-- navbar --}}
    @include('layouts.navbar')

    {{-- deskripsi lapangan --}}
    <section>
    <div class="container" style="padding-top: 80px">
        <div class="d-flex flex-column">
            <div class="d-flex justify-content-center gap-2 mt-5">
                <img src="{{ asset('storage/' . $lapangan->image) }}" alt="">
                <div class="d-flex flex-column gap-2">
                    <!-- You can add more images related to the lapangan here -->
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-4">
                <div>
                    <h1 class="text-dark">{{ $lapangan->nama_lapangan }}</h1>
                    <p>{{ $lapangan->lokasi }}</p>
                </div>
                <button class="btn" style="background-color: #002379; border: none;">
                    <a class="text-decoration-none text-white" href="{{ route('detail', $lapangan->id) }}">Lihat Jadwal</a>
                </button>
            </div>
            <hr>
            <div>
                <h3 class="fw-semibold">Deskripsi</h3>
                <p>{{ $lapangan->deskripsi }}</p>
                <h3>Lokasi Venue</h3>
                <p>{{ $lapangan->lokasi }}</p>
                <div>
                    <h3>Fasilitas</h3>
                    <ul class="row mb-4">
                        @foreach(explode(',', $lapangan->fasilitas) as $fasilitas)
                            <div class="col">
                                <li>{{ trim($fasilitas) }}</li>
                            </div>
                        @endforeach
                    </ul>
                    <button class="btn" style="background-color: #002379; border: none;">
                        <a class="text-decoration-none text-white" href="{{ route('pilih') }}">Pesan Sekarang</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


    {{-- footer --}}
    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
