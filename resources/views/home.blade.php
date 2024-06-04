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

<body>

    {{-- navbar --}}
    @include('layouts.navbar')

    {{-- hero section --}}
    <section id="hero">
        <div class="container">
            <div class="d-flex flex-column justify-content-center align-items-start"
                style="width: 620px; height: 74vh;">
                <h1>RIBET CARI TEMPAT OLAHARAGA?
                    PESEN AJA DI SportSpotter!</h1>
                <p>Kami menawarkan berbagai lapangan olahraga dengan fasilitas terbaik. Pesan lapangan dengan mudah dan
                    nikmati pengalaman bermain yang menyenangkan. Segera reservasi lapangan Anda dan tingkatkan
                    permainan Anda hari ini!</p>
                <button class="btn-hero">
                    <a class="text-decoration-none text-white" href="">CARI LAPANGAN</a>
                </button>
            </div>
        </div>
    </section>

    {{-- advantage section --}}
    <section style="margin-top: 72px">
        <div class="container">
            <div class="text-center">
                <h2>Pilih Kami,
                    Nikmati <span>Keunggulan Kami</span></h2>
                <div class="row d-flex justify-content-center align-items-center" style="margin-top: 55px">
                    <div class="col">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{ asset('img/icon1.png') }}" alt="" class="img-fluid mb-3 rounded-circle"
                                style="max-width: 100px;">
                            <h3 class="mt-3">Pemesanan Mudah</h3>
                            <p>Sistem pemesanan intuitif untuk memesan lapangan dengan cepat dan tanpa harus repot serta ribet</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{ asset('img/icon2.png') }}" alt="" class="img-fluid mb-3 rounded-circle"
                                style="max-width: 100px;">
                            <h3 class="mt-3">Lingkungan Profesional</h3>
                            <p>Lingkungan bermain yang ramah, staf yang siap membantu untuk pengalaman bermain yang
                                mengasikkan.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{ asset('img/icon3.png') }}" alt="" class="img-fluid mb-3 rounded-circle"
                                style="max-width: 100px;">
                            <h3 class="mt-3">Fasilitas Premium</h3>
                            <p>Lapangan olahraga dengan fasilitas terbaik untuk pengalaman bermain yang optimal dan menyenangkan</p>
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
