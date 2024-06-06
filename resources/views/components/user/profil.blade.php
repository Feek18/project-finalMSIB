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
                    <div class="py-2">
                        <form action="">
                            <div class="form-group-flex">
                                <label for="nama-lengkap">Username</label>
                                <input class="form-control" type="text" id="nama-lengkap" name="nama-lengkap"
                                    placeholder="Fikri Achmada">
                            </div>
                            <div class="form-group-flex">
                                <label for="nomor-rekening">Email</label>
                                <input class="form-control" type="email" id="nomor-rekening" name="nomor-rekening"
                                    placeholder="bintang@gmail.com">
                            </div>
                            <div class="form-group-flex">
                                <label for="bukti-transfer">No. Telepon</label>
                                <input class="form-control" type="text" id="bukti-transfer" name="bukti-transfer" placeholder="012345678">
                            </div>
                        </form>
                    </div>
                    <hr>
                    <h2>Edit Profil</h2>
                    <div class="py-2">
                        <form action="">
                            <div class="form-group-flex">
                                <label for="nama-lengkap">Username</label>
                                <input class="form-control" type="text" id="nama-lengkap" name="nama-lengkap"
                                    placeholder="Masukkan username anda...">
                            </div>
                            <div class="form-group-flex">
                                <label for="nomor-rekening">Email</label>
                                <input class="form-control" type="email" id="nomor-rekening" name="nomor-rekening"
                                    placeholder="Masukkan email anda...">
                            </div>
                            <div class="form-group-flex">
                                <label for="bukti-transfer">No. Telepon</label>
                                <input class="form-control" type="text" id="bukti-transfer" name="bukti-transfer" placeholder="Masukka nomor telepon anda...">
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
