

    {{-- navbar --}}
    @include('layouts.navbar')
    @include('components.admin.sidebar')

    

    {{-- main area dashboard container--}}
    <div class="content" style="padding-top:80px;">
        {{-- kolom summary --}}
        <div class="bg-white rounded border border-secondary-subtle m-4 gap-3" style="height: 750px">

            {{-- page title --}}
            <h4 class="fw-bold text-center mt-4" style="color: #002379">Tambah User</h4>

            {{-- ini form tambah --}}
            <div class="col-md-5 mx-auto mt-4 bg-white rounded border border-secondary-subtle px-4">
                <div class="container mt-5">
                    <form method="POST" action="{{ route('admin.storeuser') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="role" class="form-label fw-semibold" style="color: #002379">Role</label>
                                    <select class="form-select" id="role" name="role" required>
                                         <option value="pilih opsi" disabled selected>Pilih opsi</option>
                                         @foreach($roles as $role)
                                             <option value="{{ $role->name }}">{{ $role->name }}</option>
                                         @endforeach
                                            
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-semibold" style="color: #002379">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="nama" class="form-label fw-semibold" style="color: #002379">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="no_hp" class="form-label fw-semibold" style="color: #002379">No HP</label>
                                    <input type="tel" class="form-control" id="no_telephone" name="no_telephone" value="{{ old('no_telephone') }}">
                                    @error('no_telephone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="password" class="form-label fw-semibold" style="color: #002379">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="confirm_password" class="form-label fw-semibold" style="color: #002379">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
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