@extends('./layouts/main')
@section('content')

<div class="container-login">
    <div class="loginPage">
        <div class="gambarKiri">
            <img src="./img/imgLogin.jpg" alt="imgLogin">
        </div>
        <form class="form-login">
            <center>
                <h3>Masuk Ke Akun Anda</h3>
            </center>
            <div class="email">
                <label for="email">Email <span class="pentingIcon">*</span></label>
                <input type="email" id="email" name="email" placeholder="Masukan Email" required>
            </div>
            <div class="password">
                <label for="password">Password <span class="pentingIcon">*</span></label>
                <input type="password" id="password" name="password" placeholder="Masukan Password" required>
                <span class="iconEye" style="cursor: pointer"><i class="fa-solid fa-eye-slash"></i></span>
            </div>
            <div class="cekBox">
                <input type="checkbox"> Ingat Saya
                <a href="" class="forgotPw">Lupa Password</a>
            </div>
            <div class="loginButton">
                <button type="submit">Login</button>
            </div>
            <div class="daftarSlider">
                <p>Klik Untuk Daftar Akun </p>
                <div class="slider">
                    <div class="bolaSlider"></div>
                </div>
            </div>
        </form>

        {{-- Form Daftar --}}
        <div class="gambarKanan">
            <img src="./img/imgDaftar.jpg" alt="imgLogin">
        </div>
        <form class="form-daftar">
            <center>
                <h3 class="mt-4">Daftar Buat Akun</h3>
            </center>
            <div class="namaDaftar">
                <label for="namaDaftar">Nama Lengkap <span class="pentingIcon">*</span></label>
                <input type="text" id="namaDaftar" name="namaDaftar" placeholder="Masukan Nama Lengkap" required>
            </div>
            <div class="username">
                <label for="username">Username <span class="pentingIcon">*</span></label>
                <input type="text" id="username" name="username" placeholder="Masukan Username" required>
            </div>
            <div class="emailDaftar">
                <label for="email">Email <span class="pentingIcon">*</span></label>
                <input type="email" id="emailDaftar" name="emailDaftar" placeholder="Masukan Email" required>
            </div>
            <div class="noHp">
                <label for="noHp">No.Hp <span class="pentingIcon">*</span></label>
                <input type="number" id="noHp" name="noHp" placeholder="Nomor Telepon" required>
            </div>
            <div class="passwordDaftar">
                <label for="passwordDaftar">Password <span class="pentingIcon">*</span></label>
                <input type="password" id="passwordDaftar" name="passwordDaftar" placeholder="Masukan Password" required>
            </div>
            <div class="passwordRepeat">
                <label for="passwordRepeat">Ulangi Password <span class="pentingIcon">*</span></label>
                <input type="password" id="passwordRepeat" name="passwordRepeat" placeholder="Ketik Ulang Password" required>
            </div>
            <div class="daftarButton">
                <button type="submit">Daftar</button>
            </div>
            <div class="loginSlider">
                <p>Klik Jika Sudah Punya Akun</p>
                <div class="sliderDaftar">
                    <div class="bolaDaftarSlider"></div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection