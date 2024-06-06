<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Lapangan | Page</title>
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
        #book {
            margin-top: 8px;
        }
        .equal-height {
            display: flex;
            align-items: stretch;
        }
    </style>
</head>

<body>

    {{-- navbar --}}
    @include('layouts.navbar')

    {{-- boook detail lapangan --}}
    <section>
        <div class="container mt-5" style="padding-top: 70px">
            <div class="d-flex justify-content-evenly align-items-center gap-3">
                <div>
                    <button class="btn" style="color: #FFFF; background-color: #002379; border: none;">1</button>
                    <span>Pilih Tanggal & Waktu</span>
                </div>
                <hr style="width: 5%; border: 1px solid #282828;">
                <div>
                    <button class="btn" style="color: #282828; border: 1.5px solid #002379;">2</button>
                    <span>Pembayaran</span>
                </div>
                <hr style="width: 5%; border: 1px solid #282828;">
                <div>
                    <button class="btn" style="color: #282828; border: 1.5px solid #002379;">3</button>
                    <span>Menunggu Verifikasi</span>
                </div>
                <hr style="width: 5%; border: 1px solid #282828;">
                <div>
                    <button class="btn" style="color: #282828; border: 1.5px solid #002379;">4</button>
                    <span>Status Booking</span>
                </div>
            </div>
            <div id="book">
                <div class="d-flex justify-content-center align-items-center gap-2 equal-height">
                    <div class="card p-3 mt-5 card-custom" style="width: 850px; height: 427px;">
                        <h2 class="mt-3">Pilih Tanggal</h2>
                        <div class="d-flex justify-content-around gap-2 mt-2">
                            <div class="card p-3"
                                style="width: 180px; height: 90px; color: #282828; border: 1.5px solid #002379;">
                                <div class="text-center">
                                    <p class="m-0">Min</p>
                                    <h3 style="font-size: 21px; font-weight: 700;">2 Jan</h3>
                                </div>
                            </div>
                            <div class="card p-3"
                                style="width: 180px; height: 90px; color: #282828; border: 1.5px solid #002379;">
                                <div class="text-center">
                                    <p class="m-0">Sen</p>
                                    <h3 style="font-size: 21px; font-weight: 700;">3 Jan</h3>
                                </div>
                            </div>
                            <div class="card p-3"
                                style="width: 180px; height: 90px; color: #282828; border: 1.5px solid #002379;">
                                <div class="text-center">
                                    <p class="m-0">Sel</p>
                                    <h3 style="font-size: 21px; font-weight: 700;">4 Jan</h3>
                                </div>
                            </div>
                            <div class="card p-3"
                                style="width: 180px; height: 90px; color: #282828; border: 1.5px solid #002379;">
                                <div class="text-center">
                                    <p class="m-0">Rab</p>
                                    <h3 style="font-size: 21px; font-weight: 700;">5 Jan</h3>
                                </div>
                            </div>
                            <div class="card p-3"
                                style="width: 180px; height: 90px; color: #282828; border: 1.5px solid #002379;">
                                <div class="text-center">
                                    <p class="m-0">Kam</p>
                                    <h3 style="font-size: 21px; font-weight: 700;">6 Jan</h3>
                                </div>
                            </div>
                            <div class="card p-3"
                                style="width: 180px; height: 90px; color: #282828; border: 1.5px solid #002379;">
                                <div class="text-center">
                                    <p class="m-0">Jum</p>
                                    <h3 style="font-size: 21px; font-weight: 700;">7 Jan</h3>
                                </div>
                            </div>
                            <div class="card p-3"
                                style="width: 180px; height: 90px; color: #282828; border: 1.5px solid #002379;">
                                <div class="text-center">
                                    <p class="m-0">Sab</p>
                                    <h3 style="font-size: 21px; font-weight: 700;">8 Jan</h3>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2>Pilih Waktu</h2>
                            <div class="d-flex justify-content-around gap-2 mt-2">
                                <div class="card p-3"
                                    style="width: 145px; height: 90px; color: #282828; border: 1.5px solid #002379;">
                                    <div class="text-center">
                                        <h4 style="font-size: 16px; font-weight: 700;">08.00 - 09.00</h4>
                                        <small>Rp 50.000</small>
                                    </div>
                                </div>
                                <div class="card p-3"
                                    style="width: 145px; height: 90px; color: #282828; border: 1.5px solid #002379;">
                                    <div class="text-center">
                                        <h4 style="font-size: 16px; font-weight: 700;">09.00 - 10.00</h4>
                                        <small>Rp 50.000</small>
                                    </div>
                                </div>
                                <div class="card p-3"
                                    style="width: 145px; height: 90px; color: #282828; border: 1.5px solid #002379;">
                                    <div class="text-center">
                                        <h4 style="font-size: 16px; font-weight: 700;">09.00 - 10.00</h4>
                                        <small>Rp 50.000</small>
                                    </div>
                                </div>
                                <div class="card p-3"
                                    style="width: 145px; height: 90px; color: #282828; border: 1.5px solid #002379;">
                                    <div class="text-center">
                                        <h4 style="font-size: 16px; font-weight: 700;">09.00 - 10.00</h4>
                                        <small>Rp 50.000</small>
                                    </div>
                                </div>
                                <div class="card p-3"
                                    style="width: 145px; height: 90px; color: #282828; border: 1.5px solid #002379;">
                                    <div class="text-center">
                                        <h4 style="font-size: 16px; font-weight: 700;">09.00 - 10.00</h4>
                                        <small>Rp 50.000</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3 mt-5 card-custom" style="width: 350px;">
                        <h2>Jadwal Dipilih</h2>
                        <form action="">
                            <div class="mt-2">
                                <h4>Lapangan Futsal</h4>
                                <p>Minggu, 2 Juni 2024</p>
                                <hr>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>08.00 - 09.00</h5>
                                <p>Rp. 50.000</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>09.00 - 10.00</h5>
                                <p>Rp. 50.000</p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4>Total Bayar</h4>
                                <p>Rp. 100.000</p>
                            </div>
                            <button class="btn" style="background-color: #002379; border: none; width: 100%;">
                                <a class="text-decoration-none text-white" href="{{ route('bayar') }}">Lanjutkan Pembayaran</a>
                            </button>
                        </form>
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
