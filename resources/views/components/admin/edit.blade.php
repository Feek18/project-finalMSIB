

    {{-- navbar --}}
    @include('layouts.navbar')
    @include('components.admin.sidebar')

    

    {{-- main area dashboard container--}}
   <div class="" style="margin-left: 255px; padding-top:80px;">
    <div class="bg-white rounded border border-secondary-subtle m-4 gap-3 min-vh-100">
        <h4 class="fw-bold text-center mt-4" style="color: #002379">Edit Jadwal</h4>
        <div class="col-md-5 mx-auto mt-4 bg-white rounded border border-secondary-subtle px-4">
            <div class="container mt-5">
                <form action="{{ route('admin.updatejadwal', $jadwal->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="lapangan_id" class="form-label fw-semibold" style="color: #002379">Lapangan</label>
                                <select class="form-select" id="lapangan_id" name="lapangan_id" required>
                                    <option value="">Pilih Lapangan</option>
                                    @foreach($lapangan as $lap)
                                        <option value="{{ $lap->id }}" {{ $lap->id == $jadwal->lapangan_id ? 'selected' : '' }}>{{ $lap->nama_lapangan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="hari" class="form-label fw-semibold" style="color: #002379">Hari</label>
                                <select class="form-select" id="hari" name="hari" required>
                                    <option value="Senin" {{ $jadwal->hari == 'Senin' ? 'selected' : '' }}>Senin</option>
                                    <option value="Selasa" {{ $jadwal->hari == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                                    <option value="Rabu" {{ $jadwal->hari == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                                    <option value="Kamis" {{ $jadwal->hari == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                                    <option value="Jumat" {{ $jadwal->hari == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                                    <option value="Sabtu" {{ $jadwal->hari == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                                    <option value="Minggu" {{ $jadwal->hari == 'Minggu' ? 'selected' : '' }}>Minggu</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tanggal" class="form-label fw-semibold" style="color: #002379">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $jadwal->tanggal }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="waktu_mulai" class="form-label fw-semibold" style="color: #002379">Waktu Mulai</label>
                                <input type="time" class="form-control" id="waktu_mulai" name="waktu_mulai" value="{{ $jadwal->waktu_mulai }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="waktu_selesai" class="form-label fw-semibold" style="color: #002379">Waktu Selesai</label>
                                <input type="time" class="form-control" id="waktu_selesai" name="waktu_selesai" value="{{ $jadwal->waktu_selesai }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label fw-semibold" style="color: #002379">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="Dipesan" {{ $jadwal->status == 'Dipesan' ? 'selected' : '' }}>Dipesan</option>
                            <option value="Tersedia" {{ $jadwal->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                        </select>
                    </div>
                    <button type="submit" class="btn text-white fw-semibold mt-3 mb-5" style="background-color: #002379">Update Jadwal</button>
                </form>
            </div>
        </div>
    </div>
</div>



    
