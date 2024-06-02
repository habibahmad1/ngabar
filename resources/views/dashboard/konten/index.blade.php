@extends('dashboard.layouts.main')
@section('content')
   <h3 class="my-3">Dashboard Pengetahuan</h3>

   <div class="table-responsive small col-lg-6">
    @if(session()->has('success')) 
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>  
  @endif
    <a href="/dashboard/pengetahuan/create" class="btn btn-primary">Buat Konten</a>
    <table class="table table-warning table-striped table-sm text-center">
      <thead>
        <tr class="table-primary">
          <th scope="col">No.</th>
          <th scope="col">Judul</th>
          <th scope="col">Kode</th>
          <th scope="col">URL</th>
          <th scope="col">Uploaded</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($konten as $konten)
            
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $konten->judul }}</td>
          <td>{{ $konten->pengetahuan }}</td>
          <td>{{ $konten->slug }}</td>
          <td>{{ $konten->user->name }}</td>
          <td>
            <form action="{{ route('pengetahuan.destroy', $konten->id) }}" method="POST" class="d-inline">
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