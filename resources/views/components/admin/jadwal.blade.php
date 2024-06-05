

    {{-- navbar --}}
    @include('layouts.navbar')
    @include('components.admin.sidebar')

    

    {{-- main area dashboard container--}}
    <div class="" style="margin-left: 255px;">
        {{-- kolom summary --}}
        <div class="bg-white rounded border border-secondary-subtle m-4 gap-3 min-vh-100">

            {{-- page title --}}
            <h4 class="fw-bold text-center mt-4" style="color: #002379">Jadwal Lapangan</h4>

            {{-- pagination sama, filter sama tambah jadwal --}}
            <div class="container py-3 px-4">
                <div class="d-flex justify-content-between align-items-center">

                    {{-- pagination --}}
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
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

                    {{-- tambah jadwal sama filter --}}
                    <div>
                        
                        <button class="btn fw-semibold px-3 py-1" style="border-color: #002379; color: #002379; font-size:15px">
                            <i class="fa-solid fa-filter" style="color: #002379;"></i> Filter
                        </button>
                        <button class="btn fw-semibold text-white px-3 py-1" style="background-color: #002379; border-color: #002379; font-size:15px">
                             + Tambah Jadwal
                        </button>
                    </div>
                </div>
            </div>

            {{-- ini tabel user --}}
            <div class="bg-white rounded border border-secondary-subtle mx-4 px-4">
                <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Lapangan</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Mulai</th>
                    <th scope="col">Selesai</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Futsal</td>
                        <td>Senin</td>
                        <td>04/06/24</td>
                        <td>08.00</td>
                        <td>09.00</td>
                        <td><p class="p-1 text-center text-white fw-semibold m-0" style="background-color:#002379; width: 100px; border-radius:25px; font-size:13px;">TERSEDIA</p></td>
                        <td class="d-flex gap-2">
                            <button class="btn btn-success p-1 text-center border text-success border-success fw-bold m-0" style="width: 80px; border-radius:5px; font-size:13px;">UPDATE</button>
                            <button class="btn btn-danger p-1 text-center border text-danger border-danger fw-bold m-0" style="width: 80px; border-radius:5px; font-size:13px;">DELETE</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Futsal</td>
                        <td>Senin</td>
                        <td>04/06/24</td>
                        <td>08.00</td>
                        <td>09.00</td>
                        <td><p class="bg-black text-white p-1 text-center fw-semibold m-0" style="width: 100px; border-radius:25px; font-size:13px;">DIPESAN</p></td>
                        <td class="d-flex gap-2">
                            <button class="btn btn-success p-1 text-center border text-success border-success fw-bold m-0" style="width: 80px; border-radius:5px; font-size:13px;">UPDATE</button>
                            <button class="btn btn-danger p-1 text-center border text-danger border-danger fw-bold m-0" style="width: 80px; border-radius:5px; font-size:13px;">DELETE</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    

    {{-- footer --}}
    {{-- @include('layouts.footer') --}}




    
