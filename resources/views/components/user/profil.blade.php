<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil | Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Logo bar -->
    <link rel="icon" type="image/png" href="img/logoaja.png">\
    <style>
        .form-group-flex {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .form-group-flex label {
            min-width: 150px;
            margin-right: 10px;
        }

        .form-group-flex input {
            flex: 1;
        }
    </style>
</head>

<body>

    {{-- navbar --}}
    @include('layouts.navbar')

    {{-- profil view --}}
  <section>
    <div class="container" style="padding-top: 90px">
        <div class="d-flex justify-content-center align-items-center">
            <div class="card p-3" style="width: 750px">
                <h2>Profil Diri</h2>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="py-2">
                    <form action="{{ route('profil.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group-flex">
                            <label for="nama-lengkap">Nama</label>
                            <input class="form-control" type="text" id="nama-lengkap" name="name" value="{{ $user->name }}" placeholder="Masukkan username anda...">
                        </div>
                        <div class="form-group-flex">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" id="email" name="email" value="{{ $user->email }}" placeholder="Masukkan email anda...">
                        </div>
                        <div class="form-group-flex">
                            <label for="no_telephone">No. Telepon</label>
                            <input class="form-control" type="text" id="no_telephone" name="no_telephone" value="{{ $user->no_telephone }}" placeholder="Masukkan nomor telepon anda...">
                        </div>
                        <div class="form-group-flex">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" id="password" name="password" placeholder="Masukkan password baru jika ingin mengubahnya">
                        </div>
                        <div class="form-group-flex">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi password baru">
                        </div>
                        <button class="btn float-end" style="font-size: 18px; padding: 6px 28px; color: #FFF; background-color: #002379; border: none;">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


    {{-- footer --}}
    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
