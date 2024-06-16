{{-- navbar --}}
@include('components.admin.layouts.navbardash')
@include('components.admin.sidebar')

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
        <h5 class="fw-bold mt-4" style="color: #002379">Belum diverifikasi</h5>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Nama Lengkap User</td>
                    <td>Futsal</td>
                    <td>Minggu, 3 Juni 2024</td>
                    <td>08.00 - 09.00</td>
                    <td>
                        <button class="btn btn-primary fw-semibold p-1 text-center m-0 border-0"
                            style="background-color: #002379; width: 80px; border-radius: 25px; font-size: 13px;">
                            LIHAT
                        </button>
                    </td>
                    <td>
                        <p class="p-1 text-center text-white fw-semibold m-0 bg-warning"
                            style=" width: 100px; border-radius:25px; font-size:13px;">PROSES</p>
                    </td>
                    <td class="d-flex gap-2">
                        <button class="btn btn-danger p-1 text-center border text-danger border-danger fw-bold m-0"
                            style="width: 80px; border-radius:5px; font-size:13px;">TOLAK</button>
                        <button class="btn btn-success p-1 text-center border text-success border-success fw-bold m-0"
                            style="width: 80px; border-radius:5px; font-size:13px;">TERIMA</button>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Nama Lengkap User</td>
                    <td>Futsal</td>
                    <td>Minggu, 3 Juni 2024</td>
                    <td>08.00 - 09.00</td>
                    <td>
                        <button class="btn btn-primary fw-semibold p-1 text-center m-0 border-0"
                            style="background-color: #002379; width: 80px; border-radius: 25px; font-size: 13px;">
                            LIHAT
                        </button>
                    </td>
                    <td>
                        <p class="p-1 text-center text-white fw-semibold m-0 bg-warning"
                            style=" width: 100px; border-radius:25px; font-size:13px;">PROSES</p>
                    </td>
                    <td class="d-flex gap-2">
                        <button class="btn btn-danger p-1 text-center border text-danger border-danger fw-bold m-0"
                            style="width: 80px; border-radius:5px; font-size:13px;">TOLAK</button>
                        <button class="btn btn-success p-1 text-center border text-success border-success fw-bold m-0"
                            style="width: 80px; border-radius:5px; font-size:13px;">TERIMA</button>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Nama Lengkap User</td>
                    <td>Futsal</td>
                    <td>Minggu, 3 Juni 2024</td>
                    <td>08.00 - 09.00</td>
                    <td>
                        <button class="btn btn-primary fw-semibold p-1 text-center m-0 border-0"
                            style="background-color: #002379; width: 80px; border-radius: 25px; font-size: 13px;">
                            LIHAT
                        </button>
                    </td>
                    <td>
                        <p class="p-1 text-center text-white fw-semibold m-0 bg-warning"
                            style=" width: 100px; border-radius:25px; font-size:13px;">PROSES</p>
                    </td>
                    <td class="d-flex gap-2">
                        <button class="btn btn-danger p-1 text-center border text-danger border-danger fw-bold m-0"
                            style="width: 80px; border-radius:5px; font-size:13px;">TOLAK</button>
                        <button class="btn btn-success p-1 text-center border text-success border-success fw-bold m-0"
                            style="width: 80px; border-radius:5px; font-size:13px;">TERIMA</button>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>
</div>
