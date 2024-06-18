{{-- navbar --}}
@include('components.admin.layouts.navbardash')
@include('components.admin.sidebar')



{{-- main area dashboard container --}}
<div class="content" style="padding-top:80px;">
    @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    <div class="bg-white rounded border border-secondary-subtle m-4 gap-3 min-vh-100">
        <h4 class="fw-bold text-center mt-4" style="color: #002379">Jadwal Lapangan</h4>
        <div class="py-3 px-4">
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('admin.tambahjadwal') }}" class="btn fw-semibold text-white px-3 py-1"
                    style="background-color: #002379; border-color: #002379; font-size:15px">
                    Tambah Jadwal
                </a>

                     <div class="py-3 px-4">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-2">
                   
                  <form action="{{ route('admin.jadwal') }}" method="GET" class="d-flex align-items-center gap-2 m-0">
                    <input type="text" name="query" class="form-control py-1 px-2 bg-transparent rounded border" 
                        style="border-color: #002379 !important; width: 150px;" 
                        placeholder="Cari Data" value="{{ request('query') }}">
                    <button type="submit" class="btn btn-primary bg-transparent border-0 p-0">
                        <i class="fa-solid fa-lg fa-magnifying-glass" style="color: #002379"></i>
                    </button>
                </form>
                </div>

            </div>
        </div>
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
                            <td class="d-flex align-items-center gap-2">
                                <a href="{{ route('admin.editjadwal', $item->id) }}"
                                    class="btn border border-0 fw-bold text-decoration-none text-white"
                                    style="background-color: #06D001; font-size:13px;">EDIT</a>
                                <form action="{{ route('admin.deletejadwal', $item->id) }}" method="POST" style="display:inline-block; margin: 0;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="btn border border-0 fw-bold text-white"
                                        style="background-color: #dc3545; width: 80px; border-radius:5px; font-size:13px;">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
       
    </div>
</div>
@include('sweetalert::alert')
