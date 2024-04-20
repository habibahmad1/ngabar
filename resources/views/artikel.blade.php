@extends('./layouts/main')
@section('content')
<center>
    <h1>Halaman {{ $title }}</h1>
</center>
<div class="container-artikel">
    
    <div class="tag">
        <div class="informasi">Informasi</div>
        <div class="pengetahuan">Pengetahuan</div>
        <div class="kuis">Kuis</div>
        <div class="pemberitahuan">Pemberitahuan</div>
        <div class="modeGrid"><i class="fa-solid fa-border-all"></i></div>
        <div class="modeBar"><i class="fa-solid fa-bars"></i></div>
        </div>
    <div class="kanvas">
        <center>
            <div class="category"><a href="/categories">All Category</a></div>
        </center>

        <div class="artikelPost">
            {{-- Content Informasi --}}
            <div class="content-informasi">

                {{-- Hero IMG --}}

                @if ($article->count())

                <div class="card mb-5 text-center">
                    <img src="https://source.unsplash.com/1200x400/?japan" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h3 class="card-title" style="color: #41a77e"><a href="/artikel/{{ $article[0]->slug }}" class="text-decoration-none" style="color: #41a77e">{{ $article[0]->judul }}</a></h3>

                      <h5>By: <a href="/authors/{{ $article[0]->user->username }}" style="color: #41a77e" class="text-decoration-none">{{ $article[0]->user->name }}</a> in <a href="/categories/{{ $article[0]->category->slug }}" style="color: #41a77e" class="text-decoration-none">{{ $article[0]->category->nama }}</a> </h5>

                      <p class="card-text">{{ $article[0]->excerpt }}</p>
                      <p class="card-text"><small class="text-info fw-bold">Last updated {{ $article[0]->created_at->diffForHumans() }}</small></p>

                      <a href="/artikel/{{ $article[0]->slug }}" class="selengkapnya" style="color: white">Baca Selengkapnya</a>
                    </div>
                  </div>
                @else
                    <p class="text-center fs-4  ">Artikel Tidak Ditemukan</p>    
                @endif

                @foreach ($article as $post)
                    <article class="mb-5">
                        <div class="text-center">
                            <img src="https://source.unsplash.com/420x100/?{{ $post->category->nama }}"  alt="imgPost" class="rounded mb-3">
                        </div>
                        <a href="/artikel/{{ $post->slug }}">
                            <h2 style="color: #41a77e">{{ $post->judul }}</h2>
                        </a>   
                        <h5>By: <a href="/authors/{{ $post->user->username }}" style="color: #41a77e">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" style="color: #41a77e">{{ $post->category->nama }}</a> </h5>
                        <p>{{ $post->excerpt }}</p>

                        <p class="card-text"><small class="text-info fw-bold">Last updated {{ $post->created_at->diffForHumans() }}</small></p>

                        <a href="/artikel/{{ $post->slug }}" class="kembaliButton" style="color: white">Baca Selengkapnya</a>
                    </article>
                    @endforeach
            </div>
                {{-- Content Pengetahuan --}}
                <div class="content-pengetahuan">
                    <h1>Content Pengetahuan</h1>
                </div>
                {{-- Content kuis --}}
                <div class="content-kuis">
                    <h1>Content Kuis</h1>
                </div>
                {{-- Content pemberitahuan --}}
                <div class="content-pemberitahuan">
                    <h1>Content Pemberitahuan</h1>
                </div>
        </div>
    </div>
    
</div>
@endsection