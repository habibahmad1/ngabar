{{-- Menggunakan Layout dari --}}
@extends('./layouts.main')

@section('content')
<div class="container-homes">
    <div class="teks-home">
        <center>
            <h1>Hello, Welcome <i class="fa-solid fa-face-laugh-wink"></i></h1>
        </center>
        <hr>
        <p>Ngabar adalah platform online yang memungkinkan pengguna untuk saling berbagi kabar, berdiskusi, dan berinteraksi. Dengan konsep yang inovatif, Ngabar memberikan ruang bagi pengguna untuk terhubung secara sosial. Silahkan Dengarkan Lagu dengan klik <button id="songButton"><i class="fa-solid fa-music"></i> BGM</button> untuk Menikmati Suasana Web ini.</p>
        <audio id="myAudio" src="./sound/You and Me.mp3" autoplay loop></audio>
    </div>
    <img src="./img/home.png" alt="">
</div>

@endsection