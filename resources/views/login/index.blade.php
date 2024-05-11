@extends('./layouts/main')
@section('content')

<div class="container-login">
    <div class="loginPage">
        <div class="gambarKiri">
            <img src="./img/imgLogin.jpg" alt="imgLogin">
        </div>
        <form class="form-login" action="/login" method="POST">
            @csrf
            {{-- Alert Success Register --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('loginError') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            @endif

            <center>
                <h3>Masuk Ke Akun Anda</h3>
            </center>
            <div class="email">
                <label for="email">Email <span class="pentingIcon">*</span></label>
                <input type="email" id="email" name="email" placeholder="Masukan Email" required autofocus class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="password">
                <label for="password">Password <span class="pentingIcon">*</span></label>
                <input type="password" id="password" name="password" placeholder="Masukan Password" required>
                <span class="iconEye" style="cursor: pointer"><i class="fa-solid fa-eye-slash"></i></span>
            </div>
            <div class="cekBox">
                <input type="checkbox" name="remember"> Ingat Saya
                <a href="" class="forgotPw" onclick="alert('Sedang Pengembangan');">Lupa Password?</a>
            </div>
            <div class="loginButton">
                <button type="submit">Login</button>
            </div>
            <div class="googleLogin"><a href="https://accounts.google.com/o/oauth2/v2/auth?scope=email%20profile&redirect_uri=http%3A%2F%2F127.0.0.1%3A8000%2Fgooglelogin&response_type=code&client_id=609385636534-lhdf545kp0eafo508hv1adgn2114k3rj.apps.googleusercontent.com&access_type=offline" class="text-decoration-none"><i class="fa-brands fa-google"></i> Login With Google</a>
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
        <form class="form-daftar" action="/register" method="POST">
            @csrf
            <center>
                <h3 class="mt-4">Daftar Buat Akun</h3>
            </center>
            <div class="namaDaftar">
                <label for="namaDaftar">Nama Lengkap <span class="pentingIcon">*</span></label>
                <input type="text" id="namaDaftar" name="name" placeholder="Masukan Nama Lengkap" class="form-control @error('name')is-invalid @enderror"required value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="username">
                <label for="username">Username <span class="pentingIcon">*</span></label>
                <input type="text" id="username" name="username" placeholder="Masukan Username" class="form-control @error('username')is-invalid @enderror" required value="{{ old('username') }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="emailDaftar">
                <label for="email">Email <span class="pentingIcon">*</span></label>
                <input type="email" id="emailDaftar" name="email" placeholder="Masukan Email" class="form-control @error('email')is-invalid @enderror" required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="noHp">
                <label for="noHp">No.Hp <span class="pentingIcon">*</span></label>
                <input type="number" id="noHp" name="noHp" placeholder="Nomor Telepon" class="form-control @error('noHp')is-invalid @enderror" required value="{{ old('noHp') }}">
                @error('noHp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="passwordDaftar">
                <label for="passwordDaftar">Password <span class="pentingIcon">*</span></label>
                <input type="password" id="passwordDaftar" name="password" placeholder="Masukan Password" class="form-control @error('password')is-invalid @enderror" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="password_confirmation">
                <label for="password_confirmation">Ulangi Password <span class="pentingIcon">*</span></label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Ketik Ulang Password" class="form-control @error('password_confirmation')is-invalid @enderror" required>
                @error('password_confirmation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
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