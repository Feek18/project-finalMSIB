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
        <!-- Steps -->
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
                <!-- Select Date and Time Card -->
                <div class="card p-3 mt-5 card-custom" style="width: 850px; height: 427px;">
                    <h2 class="mt-3">Pilih Tanggal</h2>
                    <div class="d-flex justify-content-around gap-2 mt-2" id="tanggal-list">
                        @foreach($jadwal as $j)
                            <div class="card p-3 pilih-tanggal" data-tanggal="{{ \Carbon\Carbon::parse($j->tanggal)->format('Y-m-d') }}" style="width: 180px; height: 90px; color: #282828; border: 1.5px solid #002379;">
                                <div class="text-center">
                                    <p class="m-0">{{ \Carbon\Carbon::parse($j->tanggal)->format('D') }}</p>
                                    <h3 style="font-size: 21px; font-weight: 700;">{{ \Carbon\Carbon::parse($j->tanggal)->format('j M') }}</h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <hr>
                    <div>
                        <h2>Pilih Waktu</h2>
                        <div class="d-flex justify-content-around gap-2 mt-2" id="waktu-list">
                            @foreach($jadwal as $j)
    <div class="card p-3 pilih-waktu {{ $j->status === 'Dipesan' ? 'waktu-booked' : '' }}" 
        data-waktu="{{ \Carbon\Carbon::parse($j->waktu_mulai)->format('H:i') }} - {{ \Carbon\Carbon::parse($j->waktu_selesai)->format('H:i') }}" 
        style="width: 145px; height: 90px; color: #282828; border: 1.5px solid #002379;">
        <div class="text-center">
            <h4 style="font-size: 16px; font-weight: 700;">{{ \Carbon\Carbon::parse($j->waktu_mulai)->format('H:i') }} - {{ \Carbon\Carbon::parse($j->waktu_selesai)->format('H:i') }}</h4>
            <small>Rp {{ $lapangan->harga_per_jam }}</small>
        </div>
    </div>
@endforeach

                        </div>
                    </div>
                </div>

                <!-- Selected Schedule Card -->
                <div class="card p-3 mt-5 card-custom" style="width: 350px;">
                    <h2>Jadwal Dipilih</h2>
                    <!-- Display validation errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Display general error message -->
                    @if (session('error'))
                        <div class="alert alert-danger mt-3">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{ route('bayar') }}" method="POST">
                        @csrf
                        <input type="hidden" name="lapangan_id" value="{{ $lapangan->id }}">
                        <input type="hidden" name="jadwal_id" id="selected-jadwal-id">
                        <input type="hidden" name="tanggal_peminjaman" id="selected-tanggal">
                        <input type="hidden" name="waktu_mulai" id="selected-waktu-mulai">
                        <input type="hidden" name="waktu_selesai" id="selected-waktu-selesai">
                        <input type="hidden" name="selected_times" id="selected-times-input">
                        <div class="mt-2">
                            <h4>{{ $lapangan->nama_lapangan }}</h4>
                            <p id="selected-date">Tanggal belum dipilih</p>
                            <hr>
                        </div>
                        <div id="selected-times">
                            <!-- Waktu yang dipilih akan ditampilkan di sini -->
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>Total Bayar</h5>
                            <h3 id="total-bayar">Rp. 0</h3>
                        </div>
    <button type="submit" class="btn text-white" style="width: 100%; background-color: #002379; border: none;">Pesan</button>
</form>

                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    let selectedDate = '';
    let selectedTimes = [];
    let totalBayar = 0;

    // Pilih Tanggal
    $('.pilih-tanggal').on('click', function() {
        const tanggal = $(this).data('tanggal');
        if (selectedDate === tanggal) {
            selectedDate = '';
            $(this).css('background-color', '').css('color', '#282828');
            $('#selected-date').text('Tanggal belum dipilih');
        } else {
            selectedDate = tanggal;
            $('.pilih-tanggal').css('background-color', '').css('color', '#282828');
            $(this).css('background-color', '#002379').css('color', '#fff');
            $('#selected-date').text('Tanggal: ' + selectedDate);
        }
        updateTotal();
    });

    // Pilih Waktu
    $('.pilih-waktu').on('click', function() {
        const waktu = $(this).data('waktu');
        const index = selectedTimes.indexOf(waktu);
        if (index === -1) {
            selectedTimes.push(waktu);
            $(this).css('background-color', '#002379').css('color', '#fff');
        } else {
            selectedTimes.splice(index, 1);
            $(this).css('background-color', '').css('color', '#282828');
        }
        updateSelectedTimes();
        updateTotal();
    });

    // Update Selected Times Display
function updateSelectedTimes() {
    $('#selected-times').empty();
    $('#selected-times-json').val(JSON.stringify(selectedTimes)); // Store selected times as JSON

    selectedTimes.forEach(function(waktu) {
        $('#selected-times').append('<div class="d-flex justify-content-between align-items-center"><h5>' + waktu + '</h5><p>Rp. ' + {{ $lapangan->harga_per_jam }} + '</p></div>');
    });
}


    // Update Total Bayar
function updateTotal() {
    const hargaPerJam = {{ $lapangan->harga_per_jam }};
    totalBayar = selectedTimes.length * hargaPerJam;
    $('#total-bayar').text('Rp. ' + totalBayar);

    const firstJadwalId = {{ $jadwal->first() ? $jadwal->first()->id : 'null' }};
    $('#selected-jadwal-id').val(firstJadwalId);
    $('#selected-tanggal').val(selectedDate);
    $('#selected-waktu-mulai').val(selectedTimes.length ? selectedTimes[0].split(' - ')[0] : '');
    $('#selected-waktu-selesai').val(selectedTimes.length ? selectedTimes[selectedTimes.length - 1].split(' - ')[1] : '');
    $('#selected-times-input').val(JSON.stringify(selectedTimes)); // Add this line to update the hidden input
}

});
</script>

<script>
$(document).ready(function() {
    // Cek status booked dan update tampilan
    $('.pilih-waktu').each(function() {
        if ($(this).hasClass('waktu-booked')) {
            $(this).css('background-color', '#ccc').css('color', '#999').off('click');
        }
    });

});
</script>





    {{-- footer --}}
    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
