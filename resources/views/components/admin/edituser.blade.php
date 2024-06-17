{{-- navbar --}}
@include('components.admin.layouts.navbardash')
@include('components.admin.sidebar')

{{-- main area dashboard container--}}
<div class="content" style="padding-top:80px;">
    {{-- kolom summary --}}
    <div class="bg-white rounded border border-secondary-subtle m-4 gap-3" style="height: 750px">

        {{-- page title --}}
        <h4 class="fw-bold text-center mt-4" style="color: #002379">Edit User</h4>

        {{-- form edit --}}
        <div class="col-md-5 mx-auto mt-4 bg-white rounded border border-secondary-subtle px-4">
            <div class="container mt-5">
                <form action="{{ route('admin.updateuser', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold" style="color: #002379">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold" style="color: #002379">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="no_telephone" class="form-label fw-semibold" style="color: #002379">No. Telepon</label>
                                <input type="text" class="form-control" id="no_telephone" name="no_telephone" value="{{ $user->no_telephone }}">
                                @error('no_telephone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="password" class="form-label fw-semibold" style="color: #002379">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password baru jika ingin mengubahnya">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label fw-semibold" style="color: #002379">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Masukkan password baru jika ingin mengubahnya">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="role" class="form-label fw-semibold" style="color: #002379">Role</label>
                                <select class="form-select" id="role" name="role">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->name }}" {{ $user->roles->first()->name == $role->name ? 'selected' : '' }}>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
