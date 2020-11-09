<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{  asset('css/login_regis.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
        <div class="container">
            <div class="persegi">
                <img src="{{ asset('image/avatar.png') }}" class="img1">
            </div>
            <div class="kotaklogin">
                <h2>SILAHKAN LOGIN</h2>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <label for="">
                        <span>Username</span>
                        <input type="text" name="username" placeholder="Masukan Username Anda" required autocomplete="off">
                        @error('username')
                                        <p style="color:red; font-size:14px; ">{{ $message }}</p>
                        @enderror
                    </label>
                    <label for="">
                        <span>Password</span>
                        <input type="password" name="password" id="pass" placeholder="Masukan Password Anda" required autocomplete="off">
                        @error('password')
                                        <p style="color:red; font-size:14px;">{{ $message }}</p>
                        @enderror
                    </label>
                    <button class="submit" type="submit">Log In</button>
                </form>
                    <p class="p1">Lupa<a class="lp" href="">Password?</a></p>
                    <p class="p2">Belum punya akun?<a class="bb" href="{{ route('register') }}">Buat Disini!</a></p>
            </div>
        </div>
</body>
</html>
