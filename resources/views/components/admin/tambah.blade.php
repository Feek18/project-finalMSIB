

    {{-- navbar --}}
    @include('components.admin.layouts.navbardash')
    @include('components.admin.sidebar')

    

   <div class="content" style="padding-top:80px;">
    <div class="bg-white rounded border border-secondary-subtle m-4 gap-3 min-vh-100">
        <h4 class="fw-bold text-center mt-4" style="color: #002379">Tambah Jadwal</h4>
        <div class="col-md-5 mx-auto mt-4 bg-white rounded border border-secondary-subtle px-4">
            <div class="container mt-5">
                <form action="{{ route('admin.storejadwal') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="lapangan_id" class="form-label fw-semibold" style="color: #002379">Lapangan</label>
                                <select class="form-select" id="lapangan_id" name="lapangan_id" required>
                                    <option value="">Pilih Lapangan</option>
                                    @foreach($lapangan as $lap)
                                        <option value="{{ $lap->id }}">{{ $lap->nama_lapangan }}</option>
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
                                    <option value="Pilih">Pilih Hari</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tanggal" class="form-label fw-semibold" style="color: #002379">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="waktu_mulai" class="form-label fw-semibold" style="color: #002379">Waktu Mulai</label>
                                <input type="time" class="form-control" id="waktu_mulai" name="waktu_mulai" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="waktu_selesai" class="form-label fw-semibold" style="color: #002379">Waktu Selesai</label>
                                <input type="time" class="form-control" id="waktu_selesai" name="waktu_selesai" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label fw-semibold" style="color: #002379">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="Dipesan">Dipesan</option>
                            <option value="Tersedia">Tersedia</option>
                        </select>
                    </div>
                    <button type="submit" class="btn text-white fw-semibold mt-3 mb-5" style="background-color: #002379">Tambah Jadwal</button>
                </form>
            </div>
        </div>
    </div>
</div>
    
