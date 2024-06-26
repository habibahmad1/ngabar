{{-- Menggunakan Layout dari --}}
@extends('./layouts.main')

@section('content')
<div class="container-homes">
    <div class="teks-home">
        <center>
            <h1>Hello, <span id="element" style="color: #ffff76"></span> </h1>
        </center>
        <hr>
        <p>Ngabar adalah platform online yang memungkinkan pengguna untuk saling berbagi kabar, berdiskusi, dan berinteraksi. Dengan konsep yang inovatif, Ngabar memberikan ruang bagi pengguna untuk terhubung secara sosial. Silahkan Dengarkan Lagu dengan klik <button id="songButton"><i class="fa-solid fa-music"></i> BGM</button> untuk Menikmati Suasana Web ini.</p>
        <audio id="myAudio" src="./sound/You and Me.mp3" autoplay loop></audio>
    </div>
    <img src="./img/home.png" alt="ImgHome" id="ImgHome">
    <audio src="./sound/hello.mp3" id="hello"></audio>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const typed = new Typed('#element', {
                strings: ["Welcome To Ngabar","Nice To Meet You"],
                typeSpeed: 150,
                backSpeed: 150,
                loop: true,
            });
        });
    </script>
    {{-- Type Animation --}}
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
</div>

@endsection