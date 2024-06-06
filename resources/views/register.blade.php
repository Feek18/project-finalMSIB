<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Logo bar -->
    <link rel="icon" type="image/png" href="img/logoaja.png">
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('{{ asset('img/body-img.png') }}');
            height: 118vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: blur(7px);
            z-index: -1;
        }
    </style>

</head>

<body>

    {{-- navbar --}}
    @include('layouts.navbar')

    {{-- card login --}}
    <section class="py-5">
        <div class="container" style="margin-top: 70px;">
            <div class="d-flex justify-content-center align-items-center">
                <div class="card p-5 rounded-4" style="width: 40%">
                    <h3 class="text-center fw-bold" style="color: #002379">Daftar Akun</h3>
                    <div class="mt-2">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                      <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="mb-2">
                                <div style="flex: 1;">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control rounded-3 bg-secondary-subtle" placeholder="Masukkan nama anda" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control rounded-3 bg-secondary-subtle" placeholder="Masukkan email anda" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="email">No. Telepon</label>
                                <input type="text" name="email" class="form-control rounded-3 bg-secondary-subtle" placeholder="Masukkan nomor anda" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control rounded-3 bg-secondary-subtle" placeholder="Masukkan password anda">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="password_confirmation">Password Confirm</label>
                                <input type="password" name="password_confirmation" class="form-control rounded-3 bg-secondary-subtle" placeholder="Konfirmasi password anda">
                                @error('password_confirmation')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                             <div class="d-flex flex-column gap-2 mb-3">
                                <button class="btn-non-outline text-white rounded-3" type="submit">Daftar</button>
                                <a class="btn-outline d-flex align-items-center justify-content-center text-decoration-none text-secondary rounded-3" href="{{ route('login.google') }}">
                                    <img class="me-2" src="{{ asset('img/google.png') }}" width="5%" alt=""> Masuk dengan Google
                                </a>
                            </div>
                            <p class="text-center mt-4">Sudah punya akun? 
                                <a class="text-decoration-none fw-bold" href="{{ route('register') }}" style="color: #002379">Masuk disini</a>
                            </p>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
