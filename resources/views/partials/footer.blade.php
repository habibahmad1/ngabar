<div class="container-footer">
    <h1 class="titleFooter">Ngabar</h1>
    <hr>
    <div class="container-tools">
        <div class="service_product my-3">
            <h5>Tentang Kami</h5>
            <a href="https://habibahmad.my.id/ourprofil">Profil Kami</a>
            <a href="https://habibahmad.my.id/refrence">Refrensi & Sumber</a>
            <a class="text-white">Sosial Media</a>
            <span>
                <a href="#" class="d-inline m-1 fs-6"><i class="fa-brands fa-square-x-twitter"></i></a>
                <a href="#" class="d-inline m-1 fs-6"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#" class="d-inline m-1 fs-6"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="d-inline m-1 fs-6"><i class="fa-brands fa-square-facebook"></i></a>
            </span>
        </div>
        <div class="service_product">
            <h5>Alat</h5>
            <a href="https://chatgpt.com/" target="_blank">AI Chat Populer</a>
            <a href="https://www.toolabs.live//" target="_blank">Web Langganan Manfaat</a>
            <a href="https://www.sporcle.com/" target="_blank">Aneka Quiz</a>
            <a href="https://www.ps1fun.com/" target="_blank">Games PS1 Full</a>
        </div>
        <div class="service_product my-3">
            <h5>Web Bermanfaat</h5>
            <a href="https://en1.savefrom.net/" target="_blank">Download Video</a>
            <a href="https://tinywow.com/" target="_blank">Edit/Compress File</a>
            <a href="https://www.capcut.com/" target="_blank">Edit Video | CapCut</a>
            <a href="https://openlibrary.org/" target="_blank">Perpustakaan Online</a>
        </div>
        <div class="service_product my-3">
            <h5>Translate</h5>
            <a id="google_translate_element"></a>
            <?php
            // Mengatur zona waktu ke Waktu Indonesia Barat (WIB)
            date_default_timezone_set('Asia/Jakarta');
            ?>
            <a class="text-white">{{ date('H:i') }}</a>
            <a class="text-white">{{ date('d F Y') }}</a>
        </div>
    </div>
    <footer>
        <p>All Rights Reserved | {{ date('Y') }} Ngabar Technology</p>
    </footer>
</div>