@extends('./dashboard.layouts.main')

@section('content')

<div class="container-profil">
    @if(session()->has('success')) 
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>  
  @endif
    <h2 class="text-center my-3">Kartu Nama <br> <span style="color: #f68718"> {{ auth()->user()->name }}</span></h2>
    
    @if ($user->image)
    <div class="imgProfil">
        <img src="{{ asset('storage/' . $user->image) }}" alt="image" >
    </div>
    @else
    <div class="imgProfil">
        <img src="../img/pw.jpg" alt="image" >
    </div>
    @endif
    
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
</div>
<div class="btn-edit">
    <a href="{{ route('profil.edit', auth()->user()) }}" class="btn btn-primary"><i class="fa-solid fa-pen"></i> Edit Profil </a>

    <button class="btn btn-success mx-2" onclick="capture()"> <i class="fa-solid fa-camera"></i> Screenshot</button>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection