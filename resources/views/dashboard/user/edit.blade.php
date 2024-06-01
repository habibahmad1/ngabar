@extends('dashboard.layouts.main')
@section('content')
    <div class="editProfil">
        <form class="form-daftar" action="{{ route('profil.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <center>
                <h3 class="mt-4">Edit Profil</h3>
            </center>
            <div class="editData namaDaftar">
                <label for="namaDaftar">Nama Lengkap <span class="pentingIcon">*</span></label>
                <input type="text" id="namaDaftar" name="name" class="form-control @error('name')is-invalid @enderror" required value="{{ old('name', $user->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="editData usernamed">
                <label for="username">Username <span class="pentingIcon">*</span></label>
                <input type="text" id="username" name="username" class="form-control @error('username')is-invalid @enderror" required value="{{ old('username', $user->username) }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="editData emailDaftar">
                <label for="emailDaftar">Email <span class="pentingIcon">*</span></label>
                <input type="email" id="emailDaftar" name="email"  class="form-control @error('email')is-invalid @enderror" required value="{{ old('email', $user->email) }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="editData noHp">
                <label for="noHp">No.Hp <span class="pentingIcon">*</span></label>
                <input type="number" id="noHp" name="noHp"  class="form-control @error('noHp')is-invalid @enderror" required value="{{ old('noHp', $user->noHp) }}">
                @error('noHp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Gambar Profil</label>
                @if ($user->image)
                  <img src="{{ asset('storage/'.$user->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                  @else
                  <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="float-end editData daftarButton">
                <button type="submit" class="btn btn-primary my-5">Edit Profil</button>
            </div>
        </form>
    </div>

    <script>
    function previewImage(){
      const image = document.querySelector('#image'); // ubah dari '#img' ke '#image'
      const imagePreview = document.querySelector('.img-preview');
      
      imagePreview.style.display ="block";

      const ofReader = new FileReader();

      ofReader.readAsDataURL(image.files[0]);

      ofReader.onload = function (ofRevent){
        imagePreview.src = ofRevent.target.result;
      }
    }
    </script>
@endsection
