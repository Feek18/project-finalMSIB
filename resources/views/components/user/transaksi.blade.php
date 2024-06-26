<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembayaran View | Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Logo bar -->
    <link rel="icon" type="image/png" href="img/logoaja.png">
    <style>
    </style>
</head>

<body>

    {{-- navbar --}}
    @include('layouts.navbar')

    {{-- book detail lapangan --}}
    <section>
        <div class="container" style="padding-top: 70px">
            <div class="d-flex justify-content-center align-items-center">
                <div class="card p-3 mt-5" style="width: 850px;">
                    <h3 class="text-center py-2">Riwayat Transaksi</h3>
                    <div class="d-flex flex-column justify-content-center align-items-center py-3">
                        @foreach($transaksi as $item)
                        <div class="card p-3 mb-3" style="width: 500px">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4>{{ $item->lapangan->nama_lapangan }}</h4>
                                    <div class="d-flex flex-column">
                                        <span>{{ \Carbon\Carbon::parse($item->tanggal_peminjaman)->format('l, d F Y') }}</span>
                                        <small>{{ $item->waktu_mulai }} - {{ $item->waktu_selesai }}</small>
                                    </div>
                                </div>
                                <div>
                                    <h4>Order Id</h4>
                                    <p>{{ $item->id }}</p>
                                    <h4>Status</h4>
                                    <p>{{ $item->pembayaran ? $item->pembayaran->status : 'Belum Dibayar' }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
