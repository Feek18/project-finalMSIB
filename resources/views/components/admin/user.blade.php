{{-- navbar --}}
@include('layouts.navbar')
@include('components.admin.sidebar')

{{-- main area dashboard container--}}
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<style>
    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
    }
    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }
    .table-hover tbody tr:hover {
        background-color: inherit !important;
    }
</style>
<div class="" style="margin-left: 255px; padding-top:80px;">
    {{-- kolom summary --}}
    <div class="bg-white rounded border border-secondary-subtle m-4 gap-3 min-vh-100">

        {{-- page title --}}
        <h4 class="fw-bold text-center mt-4" style="color: #002379">Daftar Pengguna</h4>

        {{-- pagination sama searchbox --}}
        <div class="container py-3 px-4">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="{{ route('admin.tambahuser') }}" class="btn fw-semibold text-white me-2" style="background-color: #002379; border-color: #002379; font-size:15px; height:38px;">
                        + Tambah User
                    </a>
                   
                </div>

            </div>
        </div>

        {{-- ini tabel user --}}
        <div class="bg-white rounded border border-secondary-subtle mx-4 px-4">
            <table class="table table-hover" id="user-table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No. Telepon</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Role</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('#user-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.user') }}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'no_telephone', name: 'no_telephone' },
            { data: 'email', name: 'email' },
            { data: 'roles[0].name', name: 'role', orderable: false, searchable: false },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });
});
</script>
