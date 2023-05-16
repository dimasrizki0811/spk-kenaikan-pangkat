<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | E-Pangkat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/assets/css/login.css') }}">
</head>

<body>
    <div class="container text-center mt-3">
        <img src="{{ asset('/assets/images/logo/logo.png') }}" class="rounded-circle" width="100" alt="">
    </div>
    <div class="container mb-3 mt-3">
        <div class="h1 text-light text-center">Daftar E-Pangkat</div>
    </div>
    <div class="card slide-in-bottom">
        <div class="container mt-5">
            <label for="inputPassword5" class="form-label">Nama Lengkap</label>
            <input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"
                autocomplete="off" name="name">
            <div id="passwordHelpBlock" class="form-text">
            </div>

            <label for="inputPassword5" class="form-label mt-2">Username</label>
            <input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"
                name="name" autocomplete="off">
            <div id="passwordHelpBlock" class="form-text">
            </div>

            <label for="inputPassword5" class="form-label mt-2">Password</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"
                autocomplete="off" name="password">
            <div class="passwordHelper">
                <span id="passwordHelpInline" class="form-text">
                    Must be 8-20 characters long.
                </span>
            </div>

            <label for="inputPassword5" class="form-label mt-2">Confirm Password</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"
                autocomplete="off" name="confirmation_password">
            <button type="submit" class="btn bg-button mt-4 w-100">Daftar</button>
            <p class="text-center mt-2">Sudah punya akun?<a href="{{ url('/login') }}"><strong>Klik
                        disini</strong></a></p>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
