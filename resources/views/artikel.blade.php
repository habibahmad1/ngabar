@extends('./layouts/main')
@section('content')
<h1>Halaman Artikel</h1>
@foreach ($article as $post)
    
<h2>{{ $post['judul']; }}</h2>
<h5>{{ $post['penulis']; }}</h5>
<p>{{ $post['artikelPost']; }}</p>
@endforeach
@endsection