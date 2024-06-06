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

    <style>
        .rounded-circle {
            border-radius: 50%;
            object-fit: cover;
        }

        .no-btn {
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .no-btn:focus {
            outline: none;
        }
    </style>
</head>

<body style="background-color: #F3F3F3;">

    {{-- navbar --}}
    @include('layouts.navbar')

    <div style="padding-top: 80px">
        {{-- hero section --}}
        <section id="hero">
            <div class="container">
                <div class="d-flex flex-column justify-content-center align-items-start mt-5"
                    style="width: px; height: 74vh;">
                    <h1>RIBET CARI TEMPAT OLAHARAGA?</h1>
                    <br>
                    <h1>PESEN AJA DI SportSpotter!</h1>
                    <p class="text-white py-3" style="width: 500px; font-size:20px;">Kami menawarkan berbagai lapangan olahraga dengan fasilitas terbaik. Pesan lapangan dengan mudah dan
                        nikmati pengalaman bermain yang menyenangkan. Segera reservasi lapangan Anda dan tingkatkan
                        permainan Anda hari ini!</p>
                    <button class="btn-hero">
                        <a class="text-decoration-none text-white fw-semibold" href="{{ route('sewa') }}">CARI LAPANGAN</a>
                    </button>
                </div>
            </div>
        </section>

        {{-- advantage section --}}
        <section style="margin-top: 72px">
            <div class="container">
                <div class="text-center">
                    <h2>Pilih Kami,</h2>
                    <h2>Nikmati <span>Keunggulan Kami</span></h2>
                    <div class="row d-flex justify-content-center align-items-center" style="margin-top: 55px">
                        <div class="col">
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="d-flex justify-content-center align-items-center bg-white rounded-circle shadow" style="width: 160px; height: 160px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                                    <img src="{{ asset('img/icon1.png') }}" alt="" class="img-fluid" style="max-width: 90px;">
                                </div>
                                <h3 class="mt-3 fw-bold">Pemesanan Mudah</h3>
                                <p style="width: 260px;">Sistem pemesanan intuitif untuk memesan lapangan dengan cepat dan tanpa repot</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="d-flex justify-content-center align-items-center bg-white rounded-circle shadow" style="width: 160px; height: 160px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                                    <img src="{{ asset('img/icon2.png') }}" alt="" class="img-fluid"
                                    style="max-width: 100px;">
                                </div>                               
                                <h3 class="mt-3 fw-bold">Lingkungan Profesional</h3>
                                <p >Lingkungan bermain yang ramah, staf yang siap membantu untuk pengalaman bermain yang
                                    mengasikkan.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="d-flex justify-content-center align-items-center bg-white rounded-circle shadow" style="width: 160px; height: 160px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                                    <img src="{{ asset('img/icon3.png') }}" alt="" class="img-fluid"
                                    style="max-width: 100px;">
                                </div>                                
                                <h3 class="mt-3 fw-bold">Fasilitas Premium</h3>
                                <p style="width: 270px;">Lapangan olahraga dengan fasilitas terbaik untuk pengalaman bermain optimal dan menyenangkan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- footer --}}
    @include('layouts.footer')




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
