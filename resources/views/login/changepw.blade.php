@extends('./layouts/main')
@section('content')

<div class="container-login">
    <div class="loginPage">
        <div class="gambarKiri">
            <img src="{{ asset('img/pw.jpg') }}" alt="imgLogin">
        </div>
        {{-- Form Ganti Password --}}
        <form class="formChangePW" action="{{ route('password.update') }}" method="POST">
            @csrf
            <center>
                <h3 class="mt-4">Ganti Password</h3>
            </center>
            @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        
            @if (session('status'))
                <div>{{ session('status') }}</div>
            @endif
            <div class="passwordDaftar">
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="email" value="{{ $email }}">
                <label for="passwordDaftar">Password Baru <span class="pentingIcon">*</span></label>
                <input type="password" id="passwordForget" name="password" placeholder="Masukan Password" class="form-control" required>
            </div>
            <div class="password_confirmation">
                <label for="password_confirmation">Ulangi Password <span class="pentingIcon">*</span></label>
                <input type="password" id="password_confirmationForget" name="password_confirmation" placeholder="Ketik Ulang Password" class="form-control" required>
            </div>
            <div class="forgetButton">
                <button type="submit">Ganti Password</button>
            </div>
        </form>
    </div>
</div>
@endsection