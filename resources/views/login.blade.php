<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
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
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('{{ asset('img/body-img.png') }}') no-repeat center;
            background-size: cover;
            filter: blur(7px);
            z-index: -1;
            height: 125vh;
        }

        .container {
            padding: 20px;
        }
    </style>

</head>

<body>

    {{-- navbar --}}
    @include('layouts.navbar')

    {{-- card login --}}
    <section id="login-regis">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="bg-white p-4 rounded-5" style="width: 100%; max-width: 500px; margin-top:80px;">
                    <h3 class="text-center fw-bold" style="color: #002379">Masuk Akun</h3>
                    <div class="mt-4">
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

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="email"
                                    class="form-control bg-secondary-subtle ps-3 rounded-3"
                                    placeholder="Masukkan email anda">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <input type="password" name="password"
                                    class="form-control bg-secondary-subtle ps-3 rounded-3"
                                    placeholder="Masukkan password anda">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="d-flex flex-column gap-2 mb-3">
                                <button class="btn-non-outline text-white rounded-3" type="submit">Masuk</button>
                                <a class="btn-outline d-flex align-items-center justify-content-center text-decoration-none text-secondary rounded-3"
                                    href="{{ route('login.google') }}">
                                    <img class="me-2" src="{{ asset('img/google.png') }}" width="5%"
                                        alt=""> Masuk dengan Google
                                </a>
                            </div>
                            <p class="text-center mt-4">Belum punya akun?
                                <a class="text-decoration-none fw-bold" href="{{ route('register') }}"
                                    style="color: #002379">Daftar disini</a>
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
