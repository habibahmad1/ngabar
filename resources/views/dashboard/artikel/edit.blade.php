@extends('dashboard.layouts.main')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Artikel</h1>
</div>

<div class="col-lg-7">
    <form action="/dashboard/artikel/{{ $artikel->slug }}" method="POST">
      @method('put')
        @csrf
        <div class="mb-3">
          <label for="judul" class="form-label">Judul Artikel</label>
          <input type="text" class="form-control @error('judul')
            is-invalid
          @enderror" id="judul" name="judul" required autofocus value="{{ old('judul', $artikel->judul) }}">
          @error('judul')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug')
          is-invalid
        @enderror" id="slug" name="slug" value="{{ old('slug', $artikel->slug) }}">
        @error('slug')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="category_id" class="form-label">Kategori Artikel</label>
          <select class="form-select" name="category_id">
            @foreach ($data as $item)
            <option value="{{ $item->id }}" {{ old('category_id', $artikel->category_id) == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Gambar Artikel</label>
          <input class="form-control @error('image')
          is-invalid
        @enderror" type="file" id="image" name="image">
        @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="artikelPost" class="form-label">Isi Artikel</label>
            <input id="artikelPost" type="hidden" name="artikelPost" value="{{ old('artikelPost', $artikel->artikelPost) }}">
            <trix-editor input="artikelPost" class="@error('artikelPost')
            is-invalid
          @enderror"></trix-editor>
          @error('artikelPost')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        
        <button type="submit" class="btn btn-primary mb-5">Edit Artikel</button>
    </form>
</div>


<script>
    const judul = document.querySelector('#judul');
    const slug = document.querySelector('#slug');

    judul.addEventListener("change", function (){
        fetch('/dashboard/artikel/cekSlug?judul=' + judul.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept',(e)=>{
        e.prevendDefault();
    })
</script>
@endsection