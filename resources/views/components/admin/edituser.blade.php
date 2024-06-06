

    {{-- navbar --}}
    @include('layouts.navbar')
    @include('components.admin.sidebar')

    

    {{-- main area dashboard container--}}
    <div class="" style="margin-left: 255px;">
        {{-- kolom summary --}}
        <div class="bg-white rounded border border-secondary-subtle m-4 gap-3 min-vh-100">

            {{-- page title --}}
            <h4 class="fw-bold text-center mt-4" style="color: #002379">Edit User</h4>

            {{-- ini form tambah --}}
            <div class="col-md-5 mx-auto mt-4 bg-white rounded border border-secondary-subtle px-4">
                <div class="container mt-5">
                    <form action="#" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="role" class="form-label fw-semibold" style="color: #002379">Role</label>
                                    <select class="form-select" id="role" name="role" required>
                                        <option value="" disabled selected>Pilih opsi</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-semibold" style="color: #002379">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="nama" class="form-label fw-semibold" style="color: #002379">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="no_hp" class="form-label fw-semibold" style="color: #002379">No HP</label>
                                    <input type="tel" class="form-control" id="no_hp" name="no_hp" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="password" class="form-label fw-semibold" style="color: #002379">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="confirm_password" class="form-label fw-semibold" style="color: #002379">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                                </div>
                            </div>
                            <div class="col-md-12 text-center my-2">
                                <button type="submit" class="btn fw-semibold text-white px-3 py-1" style="background-color: #002379; border-color: #002379; font-size:15px">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    

    {{-- footer --}}
    {{-- @include('layouts.footer') --}}




    
