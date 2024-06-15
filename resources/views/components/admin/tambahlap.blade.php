@include('layouts.navbar')
@include('components.admin.sidebar')

<div class="content" style="padding-top:80px;">
    <div class="bg-white rounded border border-secondary-subtle m-4 gap-3 min-vh-100">
        <h4 class="fw-bold text-center mt-4" style="color: #002379">Tambah Lapangan</h4>
        <div class="col-md-5 mx-auto mt-4 bg-white rounded border border-secondary-subtle px-4">
            <div class="container mt-5">
                <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_lapangan" class="form-label fw-semibold" style="color: #002379">Nama Lapangan</label>
                        <input type="text" class="form-control" id="nama_lapangan" name="nama_lapangan" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_per_jam" class="form-label fw-semibold" style="color: #002379">Harga per jam</label>
                        <input type="text" class="form-control" id="harga_per_jam" name="harga_per_jam" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label fw-semibold" style="color: #002379">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label fw-semibold" style="color: #002379">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label fw-semibold" style="color: #002379">Lokasi</label>
                        <input type="text" class="form-control" id="lokasi" name="lokasi">
                    </div>
                    <div class="mb-3">
                        <label for="fasilitas" class="form-label fw-semibold" style="color: #002379">Fasilitas</label>
                        <input type="text" class="form-control" id="fasilitas" name="fasilitas">
                    </div>
                    <button type="submit" class="btn fw-semibold text-white px-3 py-1" style="background-color: #002379; border-color: #002379; font-size:15px">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
