<div class="container-footer">
    <h1 class="titleFooter">Ngabar</h1>
    <hr>
    <div class="container-tools">
        <div class="about_us">
            <h5>Tentang Kami</h5>
            <a href="">Tim Kami</a>
            <a href="">Kontak Kami</a>
            <a href="">Refrensi</a>
            <a href="">Publikasi</a>
        </div>
        <div class="service_product">
            <h5>Alat</h5>
            <a href="">AI Chat</a>
            <a href="">Bot</a>
            <a href="">Quiz</a>
            <a href="">Games</a>
        </div>
        <div class="service_product">
            <h5>Pelayanan</h5>
            <a href="">Informasi</a>
            <a href="">Pengetahuan</a>
            <a href="">Pemberitahuan</a>
            <a href="">Galeri</a>
        </div>
        <div class="service_product">
            <h5>Translate</h5>
            <p id="google_translate_element"></p>
            <?php
            // Mengatur zona waktu ke Waktu Indonesia Barat (WIB)
            date_default_timezone_set('Asia/Jakarta');
            ?>
            <p>{{ date('H:i') }}</p>
            <p>{{ date('d F Y') }}</p>
        </div>
    </div>
    <footer>
        <p>All Rights Reserved | {{ date('Y') }} Ngabar Technology</p>
    </footer>
</div>