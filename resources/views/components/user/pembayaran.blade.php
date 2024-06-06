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
        .card-custom {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .form-group-flex {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        .form-group-flex label {
            min-width: 150px;
            margin-right: 10px;
        }
        .form-group-flex input {
            flex: 1;
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
        <div class="container mt-5">
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
            <div id="book" class="py-3">
                <div class="d-flex align-items-start gap-2 equal-height">
                    <div class="card p-3 mt-5 card-custom" style="width: 750px;">
                        <div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h2>Total Pembayaran</h2>
                                <strong style="font-size: 20px">Rp. 100.000</strong>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h2>Jatuh Tempo</h2>
                                <strong style="font-size: 20px">3 Juni 2024, 09:30</strong>
                            </div>
                            <hr>
                            <div>
                                <div class="d-flex align-items-center gap-3 mb-2">
                                    <img src="{{ asset('img/bca.png') }}" alt="Bank BCA">
                                    <h4>Bank BCA</h4>
                                </div>
                                <div class="d-flex align-items-center mt-2 gap-3">
                                    <h3 style="color: #282828">No Rek.</h3>
                                    <h4>232880xxxx</h4>
                                </div>
                                <span class="py-3" style="color: #002379">Proses verifikasi oleh admin kurang dari 30 menit setelah pembayaran berhasil</span>
                            </div>
                        </div>
                        <div class="card p-3 mt-4">
                            <form action="">
                                <div class="form-group-flex">
                                    <label for="nama-lengkap">Nama Lengkap</label>
                                    <input class="form-control" type="text" id="nama-lengkap" name="nama-lengkap" placeholder="Nama lengkap pemilik rekening pengirim">
                                </div>
                                <div class="form-group-flex">
                                    <label for="nomor-rekening">Nomor Rekening</label>
                                    <input class="form-control" type="text" id="nomor-rekening" name="nomor-rekening" placeholder="Nomor rekening pengirim">
                                </div>
                                <div class="form-group-flex">
                                    <label for="bukti-transfer">Bukti Transfer</label>
                                    <input class="form-control" type="file" id="bukti-transfer" name="bukti-transfer">
                                </div>
                                <button class="btn float-end" style="padding: 4px 17px; color: #FFF; background-color: #002379; border: none;">Kirim</button>
                            </form>
                        </div>
                    </div>
                    <div class="card p-3 mt-5 card-custom" style="width: 350px;">
                        <div>
                            <h2>Jadwal Dipilih</h2>
                            <form action="">
                                <div class="mt-2">
                                    <h4>Lapangan Futsal</h4>
                                    <p>Minggu, 2 Juni 2024</p>
                                    <hr>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5>08.00 - 09.00</h5>
                                    <p>Rp. 50.000</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5>09.00 - 10.00</h5>
                                    <p>Rp. 50.000</p>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4>Total Bayar</h4>
                                    <p>Rp. 100.000</p>
                                </div>
                                <button class="btn w-100" style="background-color: #002379; border: none;">
                                    <a class="text-decoration-none text-white" href="">Lanjutkan Pembayaran</a>
                                </button>
                            </form>
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
