

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
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="{{ route('admin.tambah') }}" class="btn fw-semibold text-white me-2" style="background-color: #002379; border-color: #002379; font-size:15px; height:38px;">
                            + Tambah Jadwal
                        </a>
                        <div class="d-flex align-items-center">
                            <form action="#" method="GET" class="d-flex align-items-center gap-2 mb-0">
                                <input type="text" name="query" class="form-control bg-transparent rounded border" style="border-color: #002379 !important; height:38px;" placeholder="Cari User">
                                <button type="submit" class="btn btn-primary bg-transparent border-0 p-0">
                                    <i class="fa-solid fa-lg fa-magnifying-glass" style="color: #002379"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            {{-- ini tabel user --}}
            <div class="bg-white rounded border border-secondary-subtle mx-4 px-4">
                <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No. Telepon</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Role</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Nama Lengkap User</td>
                    <td>081234567890</td>
                    <td>user@gmail.com</td>
                    <td>User</td>
                    <td class="d-flex gap-2">
                            <a href="{{ route('admin.edituser') }}" class="btn btn-success p-1 text-center border text-success border-success fw-bold m-0" style="width: 80px; border-radius:5px; font-size:13px;">EDIT</a>
                            <button class="btn btn-danger p-1 text-center border text-danger border-danger fw-bold m-0" style="width: 80px; border-radius:5px; font-size:13px;">HAPUS</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    

    {{-- footer --}}
    {{-- @include('layouts.footer') --}}




    
