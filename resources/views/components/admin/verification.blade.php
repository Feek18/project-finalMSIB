

    {{-- navbar --}}
    @include('layouts.navbar')
    @include('components.admin.sidebar')

    

    {{-- main area dashboard container--}}
    <div class="" style="margin-left: 255px;">
        {{-- kolom summary --}}
        <div class="bg-white rounded border border-secondary-subtle m-4 gap-3 min-vh-100">

            {{-- page title --}}
            <h4 class="fw-bold text-center mt-4" style="color: #002379">Daftar Pengguna</h4>

            {{-- pagination sama searchbox --}}
            <div class="container py-3 px-4">
                <div class="d-flex justify-content-between align-items-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination ">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous" style="color: #002379 !important;">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#" style="color: #002379 !important;">1</a></li>
                            <li class="page-item"><a class="page-link" href="#" style="color: #002379 !important;">2</a></li>
                            <li class="page-item"><a class="page-link" href="#" style="color: #002379 !important;">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next" style="color: #002379 !important;">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <div class="d-flex align-items-center gap-2">
                        <button class="btn fw-semibold px-3 py-1" style="border-color: #002379; color: #002379; font-size:15px">
                            <i class="fa-solid fa-filter" style="color: #002379;"></i> Filter
                        </button>
                        <form action="#" method="GET" class="d-flex align-items-center gap-2 m-0">
                            <input type="text" name="query" class="form-control py-1 px-2 bg-transparent rounded border" style="border-color: #002379 !important;" placeholder="Cari User">
                            <button type="submit" class="btn btn-primary bg-transparent border-0 p-0">
                                <i class="fa-solid fa-lg fa-magnifying-glass" style="color: #002379"></i>
                            </button>
                        </form>
                    </div>

                </div>
            </div>

            {{-- ini tabel verif --}}
            <div class="bg-white rounded border border-secondary-subtle mx-4 px-4">
                <table class="table table-hover">
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
                            <button class="btn btn-primary fw-semibold p-1 text-center m-0 border-0" style="background-color: #002379; width: 80px; border-radius: 25px; font-size: 13px;">
                                LIHAT
                            </button>
                        </td>
                        <td>
                            <p class="p-1 text-center text-white fw-semibold m-0 bg-warning" style=" width: 100px; border-radius:25px; font-size:13px;">PROSES</p>
                        </td>
                        <td class="d-flex gap-2">
                            <button class="btn btn-danger p-1 text-center border text-danger border-danger fw-bold m-0" style="width: 80px; border-radius:5px; font-size:13px;">TOLAK</button>
                            <button class="btn btn-success p-1 text-center border text-success border-success fw-bold m-0" style="width: 80px; border-radius:5px; font-size:13px;">TERIMA</button>
                        </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                        <th scope="row">2</th>
                        <td>Nama Lengkap User</td>
                        <td>Futsal</td>
                        <td>Minggu, 3 Juni 2024</td>
                        <td>08.00 - 09.00</td>
                        <td>
                            <button class="btn btn-primary fw-semibold p-1 text-center m-0 border-0" style="background-color: #002379; width: 80px; border-radius: 25px; font-size: 13px;">
                                LIHAT
                            </button>
                        </td>
                        <td>
                            <p class="p-1 text-center text-white fw-semibold m-0 bg-success" style=" width: 100px; border-radius:25px; font-size:13px;">DITERIMA</p>
                        </td>
                        <td class="d-flex gap-2">
                            <button class="btn btn-danger p-1 text-center border text-danger border-danger fw-bold m-0" style="width: 80px; border-radius:5px; font-size:13px;">TOLAK</button>
                            <button class="btn btn-success p-1 text-center border text-success border-success fw-bold m-0" style="width: 80px; border-radius:5px; font-size:13px;">TERIMA</button>
                        </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                        <th scope="row">3</th>
                        <td>Nama Lengkap User</td>
                        <td>Futsal</td>
                        <td>Minggu, 3 Juni 2024</td>
                        <td>08.00 - 09.00</td>
                        <td>
                            <button class="btn btn-primary fw-semibold p-1 text-center m-0 border-0" style="background-color: #002379; width: 80px; border-radius: 25px; font-size: 13px;">
                                LIHAT
                            </button>
                        </td>
                        <td>
                            <p class="p-1 text-center text-white fw-semibold m-0 bg-danger" style=" width: 100px; border-radius:25px; font-size:13px;">DITOLAK</p>
                        </td>
                        <td class="d-flex gap-2">
                            <button class="btn btn-danger p-1 text-center border text-danger border-danger fw-bold m-0" style="width: 80px; border-radius:5px; font-size:13px;">TOLAK</button>
                            <button class="btn btn-success p-1 text-center border text-success border-success fw-bold m-0" style="width: 80px; border-radius:5px; font-size:13px;">TERIMA</button>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

    {{-- footer --}}
    {{-- @include('layouts.footer') --}}




    
