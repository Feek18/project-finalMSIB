@include('layouts.navbar')
@include('components.admin.sidebar')

<div class="content" style="padding-top:80px;">
    <div class="bg-white rounded border border-secondary-subtle m-4 gap-3 min-vh-100">
        <h4 class="fw-bold text-center mt-4" style="color: #002379">Daftar Lapangan</h4>
        <div class="container px-4 me-4 mt-3">
            <a href="{{ route('admin.tambahlap') }}" class="btn fw-semibold text-white px-3 py-1"
                style="background-color: #002379; border-color: #002379; font-size:15px">Tambah Lapangan</a>
        </div>
        <div class="table-responsive p-4">
            <table class="table table-bordered">
                <thead class="bg-secondary text-white">
                    <tr>
                        <th>Nama Lapangan</th>
                        <th>Harga per Jam</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Lokasi</th>
                        <th>Fasilitas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lapangan as $lap)
                        <tr>
                            <td>{{ $lap->nama_lapangan }}</td>
                            <td>{{ $lap->harga_per_jam }}</td>
                            <td>
                                @if ($lap->image)
                                    <img src="{{ Storage::url($lap->image) }}" alt="Image" class="img-fluid"
                                        style="max-width: 100px;">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{{ $lap->deskripsi }}</td>
                            <td>{{ $lap->lokasi }}</td>
                            <td>{{ $lap->fasilitas }}</td>
                            <td>
                                <a href="{{ route('admin.editlap', $lap->id) }}" class="btn btn-sm text-white"
                                    style="background-color: #28a745;">Edit</a>
                                <form action="{{ route('admin.destroy', $lap->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm text-white"
                                        style="background-color: #dc3545;">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if ($lapangan->isEmpty())
                <p class="text-center text-muted">Tidak ada lapangan yang tersedia.</p>
            @endif
        </div>
        <div class="container py-2 d-flex justify-content-center px-4">
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
