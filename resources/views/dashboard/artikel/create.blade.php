@extends('dashboard.layouts.main')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Buat Artikel Baru</h1>
</div>

<div class="col-lg-7">
    <form action="/dashboard/artikel" method="POST">
        @csrf
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul">
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control" id="slug" name="slug" readonly>
        </div>
        <div class="mb-3">
          <label for="kategori" class="form-label">Kategori Artikel</label>
          <select class="form-select" name="kategori">
            @foreach ($data as $item)
            <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
          </select>
        </div>

        <div class="mb-3">
            <label for="bodyPost" class="form-label">Isi Artikel</label>
            <input id="bodyPost" type="hidden" name="bodyPost">
            <trix-editor input="bodyPost"></trix-editor>
        </div>
        
        <button type="submit" class="btn btn-primary">Buat Artikel</button>
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