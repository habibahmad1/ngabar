@extends('./dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3 class="mb-3">All Galeri</h3>
</div>
 
  <div class="table-responsive small col-lg-12">
    @if(session()->has('success')) 
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>  
  @endif
    <table class="table table-warning table-striped table-sm text-center mb-5" id="galeri-view">
      <thead>
        <tr class="table-primary">
          <th scope="col">No.</th>
          <th scope="col">Judul Galeri</th>
          <th scope="col">Kategori</th>
          <th scope="col">Author</th>
          <th scope="col">Tanggal Publish</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($allgaleri as $galeri)
            
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $galeri->judul }}</td>
          <td>{{ $galeri->kategoriGaleri->nama }}</td>
          <td>{{ $galeri->user->name }}</td>
          <td>{{ $galeri->created_at->format('d F Y') }}</td>
          <td>
            <a href="/dashboard/allgaleri/{{ $galeri->id }}" class="badge bg-info"><i class="fa-solid fa-eye text-white"></i></a>
            <form action="/dashboard/allgaleri/{{ $galeri->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Yakin Mau Hapus?')"><i class="fa-solid fa-trash-can"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection