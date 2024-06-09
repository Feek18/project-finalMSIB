{{-- navbar --}}
@include('layouts.navbar')
@include('components.admin.sidebar')

{{-- main area dashboard container --}}
<div class="" style="margin-left: 255px; padding-top:80px;">
    {{-- kolom summary --}}
    <div class="bg-white rounded border border-secondary-subtle m-4 gap-3 min-vh-100">
        {{-- page title --}}
        <h4 class="fw-bold text-center mt-4" style="color: #002379">Lapangan</h4>

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
                    <a href="{{ route('admin.tambah') }}" class="btn fw-semibold text-white px-3 py-1" style="background-color: #002379; border-color: #002379; font-size:15px">
                        + Tambah Lapangan
                    </a>
                </div>
            </div>
        </div>

        {{-- ini tabel lapangan --}}
        <div class="bg-white rounded border border-secondary-subtle mx-4 px-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Lapangan</th>
                        <th scope="col">Harga per jam</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lapangan as $lap)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $lap->nama_lapangan }}</td>
                            <td>{{ $lap->harga_per_jam }}</td>
                            <td class="d-flex gap-2">
                                <a href="{{ route('admin.edit', $lap->id) }}" class="btn btn-success p-1 text-center border text-success border-success fw-bold m-0" style="width: 80px; border-radius:5px; font-size:13px;">EDIT</a>
                                <form action="{{ route('admin.delete', $lap->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger p-1 text-center border text-danger border-danger fw-bold m-0" style="width: 80px; border-radius:5px; font-size:13px;">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
