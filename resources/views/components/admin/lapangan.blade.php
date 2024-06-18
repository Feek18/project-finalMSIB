@include('components.admin.layouts.navbardash')
@include('components.admin.sidebar')

<div class="content" style="padding-top:80px;">
    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger mt-3">
            {{ session('error') }}
        </div>
    @endif
    <div class="bg-white rounded border border-secondary-subtle m-4 gap-3 min-vh-100">
        <h4 class="fw-bold text-center mt-4" style="color: #002379">Daftar Lapangan</h4>
        {{-- pagination sama searchbox --}}
        <div class="py-3 px-4">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center px-4 gap-2">
                    <a href="{{ route('admin.tambahlap') }}" class="btn fw-semibold text-white px-3 py-1"
                        style="background-color: #002379; border-color: #002379; font-size: 15px;">
                        Tambah Lapangan
                    </a>
                    <form action="{{ route('admin.lapangan') }}" method="GET"
                        class="d-flex align-items-center gap-2 m-0">
                        <input type="text" name="query"
                            class="form-control py-1 px-2 bg-transparent rounded border"
                            style="border-color: #002379 !important; width: 150px;" placeholder="Cari Data"
                            value="{{ request('query') }}">
                        <button type="submit" class="btn p-0 border-0" style="background-color: transparent;">
                            <i class="fa-solid fa-lg fa-magnifying-glass" style="color: #002379;"></i>
                        </button>
                    </form>
                </div>
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
                                <td class="d-flex align-items-center justify-content-between">
                                    <a class="btn border border-0 text-decoration-none text-white"
                                        href="{{ route('admin.editlap', $lap->id) }}"
                                        style="background-color: #06D001;">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.destroy', $lap->id) }}" method="POST"
                                        style="display:inline-block; margin: 0;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn border border-0 text-white"
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

        </div>
    </div>
    @include('sweetalert::alert')
