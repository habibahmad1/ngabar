@extends('./dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3 class="mb-3">All Artikel</h3>
</div>
 
  <div class="table-responsive small col-lg-12">
    @if(session()->has('success')) 
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>  
  @endif
    <table class="table table-warning table-striped table-sm text-center my-3" id="artikel-view">
      <thead>
        <tr class="table-primary">
          <th scope="col">No.</th>
          <th scope="col">Judul Artikel</th>
          <th scope="col">Kategori</th>
          <th scope="col">Author</th>
          <th scope="col">Tanggal Publish</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($allartikel as $artikel)
            
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $artikel->judul }}</td>
          <td>{{ $artikel->category->nama }}</td>
          <td>{{ $artikel->user->name }}</td>
          <td>{{ $artikel->created_at->format('d F Y') }}</td>
          <td>
            <a href="/dashboard/allartikel/{{ $artikel->slug }}" class="badge bg-info"><i class="fa-solid fa-eye text-white"></i></a>
            <form action="/dashboard/allartikel/{{ $artikel->slug }}" method="POST" class="d-inline">
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