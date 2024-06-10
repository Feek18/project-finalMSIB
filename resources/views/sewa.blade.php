<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sewa Lapangan | Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Logo bar -->
    <link rel="icon" type="image/png" href="img/logoaja.png">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        #sewa {
            margin-top: 72px;
        }
        .card-head {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            margin-top: 16px;
            gap: 20px
        }
    </style>
    
</head>
<body>

    {{-- navbar --}}
    @include('layouts.navbar')

    {{-- card content --}}
    <section id="sewa">
    <div class="container" style="padding-top: 50px">
        <div>
            <h1>Lapangan Kami</h1>
            <p class="mb-4">Kami menyediakan venue lapangan sesuai kebutuhan olahraga Anda</p>
            <div class="card-head">
                @foreach($lapangan as $item)
                    <div class="card" style="width: 350px;">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->nama_lapangan }}">
                        <div class="p-3">
                            <span>Venue</span>
                            <h2>{{ $item->nama_lapangan }}</h2>
                            <p>Mulai dari <strong>Rp {{ number_format($item->harga_per_jam, 0, ',', '.') }}</strong>/sesi</p>
                            <button class="btn-card">
                                <a class="text-decoration-none text-white" href="{{ route('detail', $item->id) }}">Lihat Jadwal</a>
                            </button>
                        </div>
                    </div>
                @endforeach
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
