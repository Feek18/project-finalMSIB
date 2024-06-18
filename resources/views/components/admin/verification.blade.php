{{-- navbar --}}
@include('components.admin.layouts.navbardash')
@include('components.admin.sidebar')

{{-- main area dashboard container --}}
<div class="content" style="padding-top:80px;">
    {{-- kolom summary --}}
    <div class="container py-3 px-4">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    <div class="bg-white rounded border border-secondary-subtle m-4 gap-3 min-vh-100">

        {{-- page title --}}
        <h4 class="fw-bold text-center mt-4" style="color: #002379">Daftar Status Verifikasi</h4>

        {{-- pagination sama searchbox --}}
        <div class="container py-3 px-4">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-2">
                   
                    <form action="#" method="GET" class="d-flex align-items-center gap-2 m-0">
                        <input type="text" name="query" class="form-control py-1 px-2 bg-transparent rounded border" style="border-color: #002379 !important; width: 150px;" placeholder="Cari User">
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
                    @foreach($pembayaran as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->peminjaman->lapangan->nama_lapangan }}</td>
                            <td>{{ $item->peminjaman->tanggal_peminjaman }}</td>
                            <td>{{ $item->peminjaman->waktu_mulai }} - {{ $item->peminjaman->waktu_selesai }}</td>
                            <td>
                                <button class="btn btn-primary fw-semibold p-1 text-center m-0 border-0" style="background-color: #002379; width: 80px; border-radius: 25px; font-size: 13px;">
                                    <a href="{{ Storage::url($item->bukti_pembayaran) }}" target="_blank" class="text-white">LIHAT</a>
                                </button>
                            </td>
                            <td>
                                @if($item->status === 'pending')
                                    <p class="p-1 text-center text-white fw-semibold m-0 bg-warning" style=" width: 100px; border-radius:25px; font-size:13px;">PROSES</p>
                                @elseif($item->status === 'accepted')
                                    <p class="p-1 text-center text-white fw-semibold m-0 bg-success" style=" width: 100px; border-radius:25px; font-size:13px;">DITERIMA</p>
                                @elseif($item->status === 'rejected')
                                    <p class="p-1 text-center text-white fw-semibold m-0 bg-danger" style=" width: 100px; border-radius:25px; font-size:13px;">DITOLAK</p>
                                @endif
                            </td>
                            <td class="d-flex gap-2">
                                <form action="{{ route('admin.verify', ['id' => $item->id, 'status' => 'rejected']) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger p-1 text-center border text-danger border-danger fw-bold m-0" style="width: 80px; border-radius:5px; font-size:13px;">TOLAK</button>
                                </form>
                                <form action="{{ route('admin.verify', ['id' => $item->id, 'status' => 'accepted']) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-success p-1 text-center border text-success border-success fw-bold m-0" style="width: 80px; border-radius:5px; font-size:13px;">TERIMA</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
     
    </div>
</div>
