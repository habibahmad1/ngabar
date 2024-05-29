@extends('./dashboard/layouts/main')

@section('content')

    <h1 class="mt-3">Settings</h1>

    <div class="container-setting">
        <div class="tema">
            <p><i class="fa-solid fa-circle-half-stroke"></i> Tema</p>
            <div>
                <p id="modeTema">Default <i class="fa-solid fa-caret-down"></i></p>
                <div class="boxTema">
                    <p class="light">Light <i class="fa-solid fa-sun"></i></p>
                    <p class="dark">Dark <i class="fa-solid fa-moon"></i></p>
                </div>
            </div>
        </div>
        <div class="playList">
            <center>
                <h4 class="my-3"><i class="fa-solid fa-music"></i> Musik</h4>
            </center>
            <div class="songs">
                <div class="song1">
                    <span class="numberSong">1.</span>
                    <img src="../img/song/Monsters.jpg" alt="">
                    <span class="titleSong">Monster</span>
                    <span class="playSong1 play"><i class="fa-solid fa-play"></i></span>
                    <audio class="play1" src="../sound/Katie Sky - Monsters (Lyrics).mp3" loop></audio>
                    <hr style="margin:10px 0;">
                </div>
                <div class="song2">
                    <span class="numberSong">2.</span>
                    <img src="../img/song/alan-walker.jpg" alt="">
                    <span class="titleSong">Alan Walker Sabrina Carpenter</span>
                    <span class="playSong2 play"><i class="fa-solid fa-play"></i></span>
                    <audio class="play2" src="../sound/Alan-Walker-Sabrina-Carpenter-Fa.mp3" loop></audio>
                    <hr style="margin:10px 0;">
                </div>
                <div class="song3">
                    <span class="numberSong">3.</span>
                    <img src="../img/song/Cash Cash.jpg" alt="">
                    <span class="titleSong">Cash Cash - Hero ft. Christina Perri</span>
                    <span class="playSong3 play"><i class="fa-solid fa-play"></i></span>
                    <audio class="play3" src="../sound/Cash Cash - Hero ft. Christina Perri.mp3" loop></audio>
                    <hr style="margin:10px 0;">
                </div>
                <div class="song4">
                    <span class="numberSong">4.</span>
                    <img src="../img/song/Why Do I.jpg" alt="">
                    <span class="titleSong">Why Do I - feat. Bri Tolani</span>
                    <span class="playSong4 play"><i class="fa-solid fa-play"></i></span>
                    <audio class="play4" src="../sound/Why Do I- (feat. Bri Tolani).mp3" loop></audio>
                    <hr style="margin:10px 0;">
                </div>
                <div class="song5">
                    <span class="numberSong">5.</span>
                    <img src="../img/song/Senbonzakura.png" alt="">
                    <span class="titleSong">Piano Music - Senbonzakura</span>
                    <span class="playSong5 play"><i class="fa-solid fa-play"></i></span>
                    <audio class="play5" src="../sound/Soft Piano Music - Senbonzakura.mp3" loop></audio>
                    <hr style="margin:10px 0;">
                </div>
            </div>
        </div>
    </div>

@endsection