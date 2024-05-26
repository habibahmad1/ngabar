@extends('dashboard.layouts.main')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Galeri</h1>
</div>

<div class="col-lg-7">
    <form action="/dashboard/galeri/{{ $galeri->id }}" method="POST" enctype="multipart/form-data">
      @method('put')
        @csrf
        <div class="mb-3">
          <label for="judul" class="form-label">Judul Galeri</label>
          <input type="text" class="form-control @error('judul')
            is-invalid
          @enderror" id="judul" name="judul" required autofocus value="{{ old('judul', $galeri->judul) }}">
          @error('judul')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="kategoriGaleri_id" class="form-label">Kategori Galeri</label>
          <select class="form-select" name="kategoriGaleri_id">
            @foreach ($data as $item)
            <option value="{{ $item->id }}" {{ old('kategoriGaleri_id', $galeri->kategoriGaleri_id) == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="img" class="form-label">GambarGaleri</label>
          @if ($galeri->img)
            <img src="{{ asset('storage/'.$galeri->img) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-5">
          @endif
          <input class="form-control @error('img')
          is-invalid
        @enderror" type="file" id="img" name="img" onchange="previewImage()">
        @error('img')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary mb-5">Edit Galeri</button>
    </form>
</div>


<script>

    function previewImage(){
      const image = document.querySelector('#img');
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