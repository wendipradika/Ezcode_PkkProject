<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul')</title>
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container1">
        <div class="menu">
            <ul>
                <li class="logo"><img src="{{ asset('image/avatar.png') }}" alt=""></li>
                <li><a href="{{ route('home') }}">Utama</a></li>
                <li><a href="{{ route('berita') }}">Berita</a></li>
                <li><a href="{{ route('ajukan-pertanyaan') }}">Ajukan Pertanyaan</a></li>
                <li><a href="">Hubungi</a></li>
                <li>

                    @guest
                        <a href="{{ route('login') }}" class="login-btn">Login</a>
                        @else
                         <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <input type="submit" class="logout-btn" value="Log Out">
                    </form>
                    @endguest
                </li>
            </ul>
        </div>
        @yield('konten')
    </div>
</body>
</html>
