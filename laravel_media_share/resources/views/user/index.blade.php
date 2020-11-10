<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="menu">
            <ul>
                <li class="logo"><img src="{{ asset('image/avatar.png') }}" alt=""></li>
                <li><a href="">Utama</a></li>
                <li><a href="">Berita</a></li>
                <li><a href="">Ajukan Pertanyaan</a></li>
                <li><a href="">Hubungi</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <input type="submit" class="logout-btn" value="Log Out">
                    </form>
                </li>
            </ul>
        </div>
        <div class="banner">
            <div class="app-text">
                <h1>Selamat Datang <br> di Aplikasi pelayanan publik Kami</h1>
                <p>Anda dapat mengetahui berita-berita terupdate tentang pandemi Covid19, <br> dan kami pastikan anda tidak akan tertinggal informasi.</p>
            </div>
            <div class="app-picture">
                <img src="{{ asset('image/jeleme.png') }}" alt="">
            </div>
        </div>

        <div class="banner1">
            <div class="app-picture1">
                <img src="{{ asset('image/2.png') }}" alt="">
            </div>
            <div class="app-text1">
                <h1>Kunjungi<br> halaman Berita  di atas</h1>
                <p>Klik link Berita di atas, maka anda akan langsung dipindahkan ke halaman berita yang menyangkut segala informais tentang pandemi. <br>.</p>
            </div>
        </div>

        <div class="banner2">
            <div class="app-text2">
                <h1>Memiliki Masalah? atau Pertanyaan?<br> Ajukan pertanyaan anda</h1>
                <p>Pada halaman Ajukan Pertanyaan anda dapat mengajukan pertanyaan anda kepada customer service kami, dimana mereka akan menjawab keluhan anda. <br>.</p>
            </div>
            <div class="app-picture2">
                <img src="{{ asset('image/3.png') }}" alt="">
            </div>
        </div>

        <div class="banner3">
            <div class="app-picture3">
                <img src="{{ asset('image/4.png') }}" alt="">
            </div>
            <div class="app-text3">
                <h1>Ingin info lebih lanjut?<br>Hubungi Petugas</h1>
                <p>Anda ingin info lebih lanjut? Klik halaman Hubungi untuk menghubungi petugas kami.<br>.</p>
            </div>
        </div>

    </div>
</body>
</html>