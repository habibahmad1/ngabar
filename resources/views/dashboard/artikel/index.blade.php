@extends('./dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Artikel</h1>
  </div>
  <div class="table-responsive small col-lg-8">
    <a href="/dashboard/artikel/create" class="btn btn-primary">Buat Artikel</a>
    <table class="table table-warning table-striped table-sm text-center">
      <thead>
        <tr class="table-primary">
          <th scope="col">No.</th>
          <th scope="col">Judul</th>
          <th scope="col">Kategori</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dataArtikel as $artikel)
            
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $artikel->judul }}</td>
          <td>{{ $artikel->category->nama }}</td>
          <td>
            <a href="/dashboard/artikel/{{ $artikel->slug }}" class="badge bg-info"><i class="fa-solid fa-eye text-white"></i></a>
            <a href="" class="badge bg-success"><i class="fa-solid fa-pencil"></i></a>
            <a href="" class="badge bg-danger"><i class="fa-solid fa-trash-can"></i></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection