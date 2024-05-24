@extends('./dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Buat Kategori Artikel</h1>
  </div>
 
  <div class="table-responsive small col-lg-6">
    @if(session()->has('success')) 
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>  
  @endif
    <a href="/dashboard/categories" class="btn btn-primary">Buat Kategori</a>
    <table class="table table-warning table-striped table-sm text-center">
      <thead>
        <tr class="table-primary">
          <th scope="col">No.</th>
          <th scope="col">Nama Kategori</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($category as $category)
            
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->nama }}</td>
          <td>
            <a href="/dashboard/category/{{ $category->slug }}" class="badge bg-info"><i class="fa-solid fa-eye text-white"></i></a>
            <a href="/dashboard/category/{{ $category->slug }}/edit" class="badge bg-success"><i class="fa-solid fa-pencil"></i></a>
            <form action="/dashboard/category/{{ $category->slug }}" method="POST" class="d-inline">
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