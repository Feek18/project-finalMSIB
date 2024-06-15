{{-- navbar --}}
@include('components.admin.layouts.navbardash')
@include('components.admin.sidebar')



{{-- main area dashboard container --}}
<div class="content" style="padding-top:80px;">
    <div class="bg-white rounded border border-secondary-subtle m-4 gap-3 min-vh-100">
        <h4 class="fw-bold text-center mt-4" style="color: #002379">Jadwal Lapangan</h4>
        <div class="container py-3 px-4">
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('admin.tambahjadwal') }}" class="btn fw-semibold text-white px-3 py-1"
                    style="background-color: #002379; border-color: #002379; font-size:15px">
                    + Tambah Jadwal
                </a>
            </div>
        </div>
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
                    @foreach ($jadwal as $index => $item)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $item->lapangan->nama_lapangan }}</td>
                            <td>{{ $item->hari }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->waktu_mulai }}</td>
                            <td>{{ $item->waktu_selesai }}</td>
                            <td>
                                <p class="p-1 text-center text-white fw-semibold m-0"
                                    style="background-color:#002379; width: 100px; border-radius:25px; font-size:13px;">
                                    {{ $item->status }}</p>
                            </td>
                            <td class="d-flex gap-2">
                                <a href="{{ route('admin.editjadwal', $item->id) }}"
                                    class="btn btn-success p-1 text-center border text-success border-success fw-bold m-0"
                                    style="width: 80px; border-radius:5px; font-size:13px;">EDIT</a>
                                <form action="{{ route('admin.deletejadwal', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="btn btn-danger p-1 text-center border text-danger border-danger fw-bold m-0"
                                        style="width: 80px; border-radius:5px; font-size:13px;">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="container py-3 d-flex justify-content-center px-4">
            <nav aria-label="Page navigation example">
                <ul class="pagination ">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous" style="color: #002379 !important;">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#" style="color: #002379 !important;">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#" style="color: #002379 !important;">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#" style="color: #002379 !important;">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next" style="color: #002379 !important;">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
