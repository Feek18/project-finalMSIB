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
                    <button class="btn" style="color: #282828; border: 1.5px solid #002379;">3</button>
                    <span>Menunggu Verifikasi</span>
                </div>
                <hr style="width: 5%; border: 1px solid #282828;">
                <div>
                    <button class="btn" style="color: #FFFF; background-color: #002379; border: none;">4</button>
                    <span>Status Booking</span>
                </div>
            </div>
            <div id="book" class="py-3">
                <div class="d-flex justify-content-center align-items-center full-height">
                    <div class="card p-3 mt-5 text-center" style="width: 850px;">
                        <h3>Verifikasi Berhasil!</h3>
                        <div class="card">

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
