{{-- navbar --}}
@include('components.admin.layouts.navbardash')
@include('components.admin.sidebar')
@include('sweetalert::alert')

{{-- main area dashboard container --}}
<div class="content" style="padding-top:70px;">
    {{-- kolom summary --}}
    <div class="row row-col row-cols-2 row-cols-md-3 g-2 m-4">
        <!-- Kolom pertama -->
        <div class="col col-md-4 bg-white rounded border border-secondary-subtle d-flex flex-column justify-content-center align-items-center text-center"
            style="height: 150px">
            <p class="fw-semibold p-0 m-2">Total User</p>
            <h4 class="fw-bold pb-1" style="color: #002379">{{ $totalUsers }}</h4>
        </div>
        <!-- Kolom kedua -->
        <div class="col col-md-4 bg-white rounded border border-secondary-subtle d-flex flex-column justify-content-center align-items-center text-center"
            style="height: 150px">
            <p class="fw-semibold p-0 m-2">Total Booking</p>
            <h4 class="fw-bold pb-1" style="color: #002379">{{ $totalBookings }}</h4>
        </div>
        <!-- Kolom ketiga -->
        <div class="col col-12 col-md-4 bg-white rounded border border-secondary-subtle d-flex flex-column justify-content-center align-items-center text-center"
            style="height: 150px">
            <p class="fw-semibold p-0 m-2">Total Pendapatan</p>
            <h4 class="fw-bold pb-1" style="color: #002379">Rp. {{ number_format($totalRevenue, 0, ',', '.') }}</h4>
        </div>
    </div>

    {{-- ini tabel verif --}}
    <div class="bg-white rounded border border-secondary-subtle mx-4 px-4" style="min-height: 400px">
    <h5 class="fw-bold mt-4" style="color: #002379">Verifikasi Pembayaran</h5>
    
    @foreach (['pending' => 'Pending', 'accepted' => 'Diterima', 'rejected' => 'Ditolak'] as $status => $statusText)
        <h5 class="fw-bold mt-4" style="color: #002379">{{ $statusText }}</h5>
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Lapangan</th>
                    <th scope="col">Hari/Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Bukti Transfer</th>
                    <th scope="col">Status Verifikasi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach (${'pembayaran' . ucfirst($status)} as $pembayaran)
                    <tr>
                        <th scope="row">{{ $pembayaran->id }}</th>
                        <td>{{ $pembayaran->user->name }}</td>
                        <td>{{ $pembayaran->peminjaman->lapangan->nama_lapangan }}</td>
                        <td>{{ \Carbon\Carbon::parse($pembayaran->peminjaman->tanggal)->format('l, j F Y') }}</td>
                        <td>{{ $pembayaran->peminjaman->waktu_mulai }} - {{ $pembayaran->peminjaman->waktu_selesai }}</td>
                        <td>
                            <button class="btn btn-primary fw-semibold p-1 text-center m-0 border-0"
                                style="background-color: #002379; width: 80px; border-radius: 25px; font-size: 13px;">
                                LIHAT
                            </button>
                        </td>
                        <td>
                            <p class="p-1 text-center text-white fw-semibold m-0 {{ $status == 'pending' ? 'bg-warning' : ($status == 'accepted' ? 'bg-success' : 'bg-danger') }}"
                                style="width: 100px; border-radius:25px; font-size:13px;">
                                {{ strtoupper($statusText) }}
                            </p>
                        </td>
                        <td class="d-flex gap-2">
                            @if ($status == 'pending')
                                <form method="POST" action="{{ route('admin.verify', ['id' => $pembayaran->id, 'status' => 'accepted']) }}">
                                    @csrf
                                    <button class="btn btn-success p-1 text-center border text-success border-success fw-bold m-0"
                                        style="width: 80px; border-radius:5px; font-size:13px;">
                                        TERIMA
                                    </button>
                                </form>
                                <form method="POST" action="{{ route('admin.verify', ['id' => $pembayaran->id, 'status' => 'rejected']) }}">
                                    @csrf
                                    <button class="btn btn-danger p-1 text-center border text-danger border-danger fw-bold m-0"
                                        style="width: 80px; border-radius:5px; font-size:13px;">
                                        TOLAK
                                    </button>
                                </form>
                            @endif
                            <form method="POST" action="{{ route('admin.deletePembayaran', $pembayaran->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger p-1 text-center border text-danger border-danger fw-bold m-0"
                                    style="width: 80px; border-radius:5px; font-size:13px;">
                                    HAPUS
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach
</div>

</div>
