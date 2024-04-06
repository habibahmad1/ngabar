@extends('./layouts/main')
@section('content')
<center>
    <h1>Halaman Artikel</h1>
</center>
<div class="container-artikel">
    
    <div class="tag">
        <a href="">Informasi</a>
        <a href="">Pengetahuan</a>
        <a href="">Kuis</a>
        <a href="">Pemberitahuan</a>
    </div>
    <div class="kanvas">
        <div class="artikelPost">
            @foreach ($article as $post)
                <article class="mb-5"> 
                    <a href="/artikel/{{ $post['slug'] }}">
                        <h2>{{ $post['judul'] }}</h2>
                    </a>   
                    <h5>By: {{ $post['penulis'] }}</h5>
                    <p>{{ $post['artikelPost'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
    
</div>
@endsection