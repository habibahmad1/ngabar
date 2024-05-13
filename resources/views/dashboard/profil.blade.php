@extends('./dashboard.layouts.main')

@section('content')
<h2 class="text-center my-3">Kartu Nama <span style="color: #2470dc"><i class="fa-solid fa-address-card"></i></span></h2>
<div class="container-profil">
    <div class="imgProfil">
        <img src="../img/pw.jpg" alt="ProfilImg" >
    </div>
    <hr>
    <div class="infoProfil nama">
        <span for="namaProfil">Nama Lengkap</span>
        <input type="text" id="namaProfil" placeholder="{{ auth()->user()->name }}" disabled>
    </div>
    <div class="infoProfil username">
        <span for="usernameProfil">Username</span>
        <input type="text" id="usernameProfil" placeholder="{{ auth()->user()->username }}" disabled>
    </div>
    <div class="infoProfil email">
        <span for="emailProfil">Email</span>
        <input type="text" id="emailProfil" placeholder="{{ auth()->user()->email }}" disabled>
    </div>
    <div class="infoProfil noHp">
        <span for="noHpProfil">No.Hp</span>
        <input type="text" id="noHpProfil" placeholder="{{ auth()->user()->noHp }}" disabled>
    </div>
    <div class="btn-edit">
        <a href="/editprofil" class="btn btn-primary">Edit Profil</a>
    </div>
    
</div>
@endsection