@extends('layouts.user')
@section('judul',"ajukan pertanyaan")
@section('konten')


    <div style="background-color: white;">
        <div class="bar" style="color: white;">
            <p>COVIDIA</p>
        </div>
        <div class="chatbox">

            <div style="background-color: #ffffff;">
                <div class="chat">
                    <img src="image/avatar.png" alt="Avatar">
                    <p>Selamat siang, saya ingin bertanya mengenai gejala covid.</p>
                    <span class="time-right">11:00</span>
                </div>

                <div class="chat darker">
                    <img src="image/avatar.png" alt="Avatar" class="right">
                    <p>Selamat siang,
                        untuk gejala yang paling umum itu ada
                        demam,
                        batuk kering dan
                        kelelahan.
                        Sedangkan untuk gejala yang sedikit tidak umum itu ada
                        rasa tidak nyaman dan nyeri,
                        nyeri tenggorokan,
                        diare,
                        konjungtivitis (mata merah),
                        sakit kepala,
                        hilangnya indera perasa atau penciuman dan
                        ruam pada kulit, atau perubahan warna pada jari tangan atau jari kaki
                        dan gejala serius yang musti diperhatikan itu seperti,
                        kesulitan bernapas atau sesak napas,
                        nyeri dada atau rasa tertekan pada dada dan
                        hilangnya kemampuan berbicara atau bergerak
                    </p>
                    <span class="time-left">11:01</span>
                </div>

                <div class="chat">
                    <img src="image/avatar.png" alt="Avatar">
                    <p>Baik, terimakasih atas informasinya.</p>
                    <span class="time-right">11:02</span>
                </div>

                <div class="chat darker">
                    <img src="image/avatar.png" alt="Avatar" class="right">
                    <p>Terimakasih kembali, jangan lupa jaga kesehatan ya!</p>
                    <span class="time-left">11:05</span>
                </div>

                <div class="mess">
                    <form name="message" action="" style="margin-left: 1%;">
                        <input name="usermsg" type="text" id="usermsg" size="120" />
                        <input name="submitmsg" type="submit" id="submitmsg" value="Kirim" size="10" />
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
