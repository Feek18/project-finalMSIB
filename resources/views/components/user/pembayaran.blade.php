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
    <div class="container mt-5" style="padding-top: 70px">
        <div class="d-flex justify-content-evenly align-items-center gap-3">
            <div>
                <button class="btn" style="color: #282828; border: 1.5px solid #002379;">1</button>
                <span>Pilih Tanggal & Waktu</span>
            </div>
            <hr style="width: 5%; border: 1px solid #282828;">
            <div>
                <button class="btn" style="color: #FFFF; background-color: #002379; border: none;">2</button>
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
            <div class="d-flex justify-content-center align-items-start gap-2 equal-height">
                <div class="card p-3 mt-5 card-custom" style="width: 850px;">
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>Total Pembayaran</h2>
                            <strong style="font-size: 20px">Rp. {{ $peminjaman->jadwal->lapangan->harga_per_jam * 2 }}</strong>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>Jatuh Tempo</h2>
                            <strong style="font-size: 20px">{{ now()->addHours(1)->format('j M Y, H:i') }}</strong>
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
                        <form action="{{ route('verifikasi') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="peminjaman_id" value="{{ $peminjaman->id }}">
                            <input type="hidden" name="jadwal_id" value="{{ $peminjaman->jadwal_id }}">
                            <input type="hidden" name="jumlah" value="{{ $peminjaman->jadwal->lapangan->harga_per_jam * 2 }}">
                             <input type="hidden" name="selected_times" value="{{ json_encode($selectedTimes) }}">
                            <div class="form-group">
                                <label for="metode_pembayaran">Metode Pembayaran</label>
                                <input type="text" class="form-control" id="metode_pembayaran" name="metode_pembayaran">
                                 @error('metode_pembayaran')
                                        <div class="text-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="no_rek">Nomor Rekening</label>
                                <input type="text" class="form-control" id="no_rek" name="no_rek">
                                @error('no_rek')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="bukti_pembayaran">Bukti Pembayaran</label>
                                <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran">
                            @error('bukti_pembayaran')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Upload Bukti Pembayaran</button>
                        </form>
                    </div>
                </div>
                <div class="card p-3 mt-5 card-custom" style="width: 350px;">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Booking</h2>
                        <strong style="font-size: 15px">#INV-1</strong>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <h4>Nama Pemesan</h4>
                        <strong>{{ auth()->user()->name }}</strong>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h4>Tanggal Booking</h4>
                        <strong>{{ $peminjaman->tanggal_peminjaman }}</strong>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
    <h2>Waktu</h2>
    <ul>
        @foreach($selectedTimes as $time)
            <li>{{ $time }}</li>
        @endforeach
    </ul>
</div>

                    <div class="d-flex justify-content-between">
                        <h4>Lapangan</h4>
                        <strong>{{ $peminjaman->lapangan->nama_lapangan }}</strong>
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
