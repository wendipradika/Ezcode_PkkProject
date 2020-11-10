<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login_regis.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <title>Register</title>
</head>
<body>
    <div class="container2">
            <img src="{{ asset('image/reg.png') }}" class="img2">
                <div class="persegi2">
                <div class="kotakdaftar">
                    <h2>SILAHKAN DAFTAR</h2>
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <label for=""><span>Nama Anda:</span></label>
                            <input type="text" name="nama" placeholder="Masukan Nama lengkap Anda" required autocomplete="off">
                        <label for=""><span>No. Telepon:</span></label>
                            <input type="number" name="telepon" placeholder="Masukan Nomor yang anda pakai sekarang" required autocomplete="off">
                        <label for=""><span>Alamat:</span></label>
                            <input type="text" name="alamat" placeholder="Masukan Alamat tempat tinggal Anda" required autocomplete="off">
                        <label for=""><span>Username</span></label>
                            <input type="text" name="username" placeholder="Masukan Username anda" required autocomplete="off">
                        <label for=""><span>email</span></label>
                            <input type="email" name="email" placeholder="Masukan email anda" required autocomplete="off">
                        <label for=""><span>Password</span></label>
                            <input type="password" name="password" placeholder="Masukan Password anda" required autocomplete="off">

                            <button class="submit" type="submit">Daftar</button>
                    </form>
                        <p class="p1">Sudah punya Akun?<a class="lp" href="{{ route('login') }}">Login!</a></p>
                </div>
            </div>
    </div>
</body>
</html>
