

    {{-- navbar --}}
    @include('layouts.navbar')
    @include('components.admin.sidebar')

    

    {{-- main area dashboard container--}}
    <div class="" style="margin-left: 255px;">
        {{-- kolom summary --}}
        <div class="bg-white rounded border border-secondary-subtle m-4 gap-3 min-vh-100">

            {{-- page title --}}
            <h4 class="fw-bold text-center mt-4" style="color: #002379">Tambah Jadwal</h4>

            {{-- ini form tambah --}}
            <div class="col-md-5 mx-auto mt-4 bg-white rounded border border-secondary-subtle px-4">
    <div class="container mt-5">
        <form action="#" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="lapangan" class="form-label fw-semibold" style="color: #002379">Lapangan</label>
                        <select class="form-select" id="lapangan" name="lapangan" required>
                            <option value="Pilih">Pilih Lapangan</option>
                            <option value="Futsal">Futsal</option>
                            <option value="Badminton">Badminton</option>
                            <option value="Voli">Voli</option>
                            <option value="Tenis">Tenis</option>
                            <option value="Basket">Basket</option>
                            <option value="Minisocer">Minisocer</option>
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
                        <label for="mulai" class="form-label fw-semibold" style="color: #002379">Mulai</label>
                        <input type="time" class="form-control" id="mulai" name="mulai" required step="3600">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="selesai" class="form-label fw-semibold" style="color: #002379">Selesai</label>
                        <input type="time" class="form-control" id="selesai" name="selesai" required step="3600">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn float-end fw-semibold text-white px-3 py-1 my-3" style="background-color: #002379; border-color: #002379; font-size:15px">
                        Tambah
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


            </div>
        </div>
    </div>
    

    {{-- footer --}}
    {{-- @include('layouts.footer') --}}




    
