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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        html, body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-image: url('{{ asset('img/body-img.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 95vh;
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
                <div class="card p-4" style="width: 50%">
                    <h1 class="text-center">Masuk Akun</h1>
                    <div class="mt-2">
                        <form action="">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Masukkan email anda">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control" placeholder="Masukkan password anda">
                            </div>
                            <div class="d-flex flex-column gap-2 mb-3">
                                <button class="btn-non-outline text-white" type="submit">Masuk</button>
                                <button class="btn-outline"><i class="fa-brands fa-google me-2"></i> Masuk dengan Google</button>
                            </div>
                            <p class="text-center">Belum punya akun ? 
                                <a class="text-decoration-none" href="{{ route('register') }}">Daftar disini</a>
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
