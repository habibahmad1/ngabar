@extends('./dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
  </div>

  <div class="totalCreated">
    <a href="/dashboard/artikel" class="artikels">
      <h5>My Artikel</h5>
      <p>{{ $data->count() }}</p>
    </a>
    <a href="/dashboard/galeri" class="galeris">
      <h5>My Galeri</h5>
      <p>{{ $galeri->count() }}</p>
    </a>
  </div>

@endsection