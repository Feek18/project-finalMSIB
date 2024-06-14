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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Logo bar -->
    <link rel="icon" type="image/png" href="img/logoaja.png">\
    <style>
        .card img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .card-custom {
            width: 100%;
            max-width: 450px;
            margin: auto;
        }

        @media only screen and (max-width: 600px) {
            .step {
                display: none !important;
            }

            .books {
                margin-top: -57px;
                display: flex;
                flex-direction: column;
            }

            .card-custom {
                width: 100%;
                max-width: none;
                padding: 15px;
            }
            .card-custom img {
                width: 40px;
                height: auto;
            }
            .card-custom h2,
            .card-custom h3,
            .card-custom h4,
            .card-custom strong {
                font-size: 16px;
            }
        }
    </style>
    </style>
</head>

<body>

    {{-- navbar --}}
    @include('layouts.navbar')

    {{-- boook detail lapangan --}}
    <section>
        <div class="container mt-5" style="padding-top: 65px">
            <div class="step d-flex justify-content-evenly align-items-center gap-3">
                <div>
                    <button class="btn" style="color: #282828; border: 1.5px solid #002379;">1</button>
                    <span>Pilih Tanggal & Waktu</span>
                </div>
                <hr style="width: 5%; border: 1px solid #282828;">
                <div>
                    <button class="btn" style="color: #282828; border: 1.5px solid #002379;">2</button>
                    <span>Pembayaran</span>
                </div>
                <hr style="width: 5%; border: 1px solid #282828;">
                <div>
                    <button class="btn" style="color: #FFFF; background-color: #002379; border: none;">3</button>
                    <span>Menunggu Verifikasi</span>
                </div>
                <hr style="width: 5%; border: 1px solid #282828;">
                <div>
                    <button class="btn" style="color: #282828; border: 1.5px solid #002379;">4</button>
                    <span>Status Booking</span>
                </div>
            </div>
            <div id="book" class="py-3">
                <div class="books d-flex justify-content-center align-items-start gap-2 equal-height">
                    <div class="card p-3 mt-5 card-custom" style="max-width: 850px;">
                        <div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h2>Status Verifikasi</h2>
                                <strong style="font-size: 20px">Pending</strong>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h2>Tanggal Pembayaran</h2>
                                <strong style="font-size: 20px">{{ $pembayaran->tanggal_pembayaran }}</strong>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4>Metode Pembayaran</h4>
                                <strong>{{ $pembayaran->metode_pembayaran }}</strong>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4>Nomor Rekening</h4>
                                <strong>{{ $pembayaran->no_rek }}</strong>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4>Bukti Pembayaran</h4>
                                <img src="{{ asset('storage/' . $pembayaran->bukti_pembayaran) }}" alt="Bukti Pembayaran"
                                    style="width: 200px;">
                            </div>
                            <span class="py-3" style="color: #002379">Proses verifikasi oleh admin kurang dari 30
                                menit setelah pembayaran berhasil</span>
                        </div>
                    </div>
                    <div class="card p-3 mt-5 card-custom" style="width: 350px;">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>Booking</h2>
                            <strong style="font-size: 15px">#INV-{{ $pembayaran->peminjaman_id }}</strong>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h4>Nama Pemesan</h4>
                            <strong>{{ auth()->user()->name }}</strong>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h4>Tanggal Booking</h4>
                            <strong>{{ $pembayaran->peminjaman->tanggal_peminjaman }}</strong>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>Waktu</h2>
                            <ul class="list-unstyled">
                                @if (is_array($selectedTimes) && !empty($selectedTimes))
                                    @foreach ($selectedTimes as $time)
                                        <li>{{ $time }}</li>
                                    @endforeach
                                @else
                                    <li>No selected times available.</li>
                                @endif
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h4>Lapangan</h4>
                            <strong>{{ $pembayaran->peminjaman->lapangan->nama_lapangan }}</strong>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h4>Durasi</h4>
                            <strong>2 Jam</strong>
                        </div>
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
