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

    {{-- boook detail lapangan --}}
    <section>
        <div class="container mt-5">
            <div class="d-flex justify-content-evenly align-items-center gap-4">
                <div>
                    <button class="btn" style="color: #FFFF; background-color: #002379; border: none;">1</button>
                    <span>Pilih Tanggal & Waktu</span>
                </div>
                <div>
                    <button class="btn" style="color: #282828; border: 1.5px solid #002379;">2</button>
                    <span>Pembayaran</span>
                </div>
                <div>
                    <button class="btn" style="color: #282828; border: 1.5px solid #002379;">3</button>
                    <span>Menunggu Verifikasi</span>
                </div>
                <div>
                    <button class="btn" style="color: #282828; border: 1.5px solid #002379;">4</button>
                    <span>Status Booking</span>
                </div>
            </div>
            <div>
                <div class="card p-3 mt-5">
                    <h2>Pilih Tanggal</h2>
                    <div class="d-flex justify-content-around mt-2">
                        <div class="card p-3" style="width: 140px; color: #FFFF; background-color: #002379; border: none;">
                            <div class="text-center">
                                <p class="text-white m-0">Min</p>
                                <h3>2 Jan</h3>
                            </div>
                        </div>
                        <div class="card p-3" style="width: 140px; color: #FFFF; background-color: #002379; border: none;">
                            <div class="text-center">
                                <p class="text-white m-0">Sen</p>
                                <h3>3 Jan</h3>
                            </div>
                        </div>
                        <div class="card p-3" style="width: 140px; color: #FFFF; background-color: #002379; border: none;">
                            <div class="text-center">
                                <p class="text-white m-0">Sel</p>
                                <h3>4 Jan</h3>
                            </div>
                        </div>
                        <div class="card p-3" style="width: 140px; color: #FFFF; background-color: #002379; border: none;">
                            <div class="text-center">
                                <p class="text-white m-0">Rab</p>
                                <h3>5 Jan</h3>
                            </div>
                        </div>
                        <div class="card p-3" style="width: 140px; color: #FFFF; background-color: #002379; border: none;">
                            <div class="text-center">
                                <p class="text-white m-0">Kam</p>
                                <h3>6 Jan</h3>
                            </div>
                        </div>
                        <div class="card p-3" style="width: 140px; color: #FFFF; background-color: #002379; border: none;">
                            <div class="text-center">
                                <p class="text-white m-0">Jum</p>
                                <h3>7 Jan</h3>
                            </div>
                        </div>
                        <div class="card p-3" style="width: 140px; color: #FFFF; background-color: #002379; border: none;">
                            <div class="text-center">
                                <p class="text-white m-0">Sab</p>
                                <h3>8 Jan</h3>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <h2>Pilih Waktu</h2>
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
