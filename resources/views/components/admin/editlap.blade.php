{{-- navbar --}}
@include('layouts.navbar')
@include('components.admin.sidebar')

{{-- main area dashboard container --}}
<div class="" style="margin-left: 255px; padding-top:80px;">
    {{-- kolom summary --}}
    <div class="bg-white rounded border border-secondary-subtle m-4 gap-3 min-vh-100">
        {{-- page title --}}
        <h4 class="fw-bold text-center mt-4" style="color: #002379">Edit Lapangan</h4>

        {{-- form edit lapangan --}}
        <div class="col-md-5 mx-auto mt-4 bg-white rounded border border-secondary-subtle px-4">
            <div class="container mt-5">
                <form action="{{ route('admin.update', $lapangan->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_lapangan" class="form-label fw-semibold" style="color: #002379">Nama Lapangan</label>
                        <input type="text" class="form-control" id="nama_lapangan" name="nama_lapangan" value="{{ $lapangan->nama_lapangan }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_per_jam" class="form-label fw-semibold" style="color: #002379">Harga per jam</label>
                        <input type="text" class="form-control" id="harga_per_jam" name="harga_per_jam" value="{{ $lapangan->harga_per_jam }}" required>
                    </div>
                    <button type="submit" class="btn fw-semibold text-white px-3 py-1" style="background-color: #002379; border-color: #002379; font-size:15px">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
