@extends('./layouts/main')
@section('content')

<div class="container-login">
    <div class="loginPage">
        <div class="gambarKiri">
            <img src="./img/imgLogin.jpg" alt="imgLogin">
        </div>
        <div class="form-login">
            <center>
                <h3>Masuk Ke Akun Anda</h3>
            </center>
            <div class="username">
                <label for="username">Username <span class="pentingIcon">*</span></label>
                <input type="text" id="username" required>
            </div>
            <div class="password">
                <label for="password">Password <span class="pentingIcon">*</span></label>
                <input type="password" id="password" required>
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
                <p>Klik belum punya akun</p>
                <div class="slider">
                    <div class="bolaSlider"></div>
                </div>
            </div>
        </div>

        {{-- Form Daftar --}}
        <div class="form-daftar">
            <center>
                <h3>Daftar Buat Akun</h3>
            </center>
            <div class="username">
                <label for="username">Username <span class="pentingIcon">*</span></label>
                <input type="text" id="username" required>
            </div>
            <div class="password">
                <label for="password">Password <span class="pentingIcon">*</span></label>
                <input type="password" id="password" required>
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
                <p>Klik belum punya akun</p>
                <div class="slider">
                    <div class="bolaSlider"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection