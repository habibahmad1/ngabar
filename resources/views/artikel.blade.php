@extends('./layouts/main')
@section('content')
<center>
    <h1>Halaman {{ $title }}</h1>
    <div class="category"><a href="/categories">All Category</a></div>
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
        <h1 class="text-center">Semua Artikel</h1>
        <div class="search">
            <form action="/artikel">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Artikel ..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit" >Search</button>
                  </div>
            </form>
        </div>

        <div class="artikelPost">
            {{-- Content Informasi --}}
            <div class="content-informasi">

                {{-- Hero IMG --}}

                @if ($article->count())

                <div class="card mb-5 text-center">
                    <img src="https://source.unsplash.com/1200x400?japan" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h3 class="card-title" style="color: #41a77e"><a href="/artikel/{{ $article[0]->slug }}" class="text-decoration-none" style="color: #41a77e">{{ $article[0]->judul }}</a></h3>

                      <h5>Penulis : <a href="/authors/{{ $article[0]->user->username }}" style="color: #41a77e" class="text-decoration-none">{{ $article[0]->user->name }}</a> <a href="/categories/{{ $article[0]->category->slug }}" style="color: #41a77e" class="text-decoration-none badge text-bg-danger">{{ $article[0]->category->nama }}</a> </h5>

                      <p class="card-text">{{ $article[0]->excerpt }}</p>
                      <p class="card-text"><small class="text-info fw-bold">{{ $article[0]->created_at->diffForHumans() }}</small></p>

                      <a href="/artikel/{{ $article[0]->slug }}" class="selengkapnya" style="color: white">Baca Selengkapnya</a>
                    </div>
                  </div>
                

                @foreach ($article->skip(1) as $post)
                    <article class="mb-5">
                        <div class="text-center gambarTiapPost">
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->nama }}"  alt="imgPost" class="rounded mb-3">
                        </div>

                        <a href="/artikel/{{ $post->slug }}">
                            <h2 style="color: #41a77e">{{ $post->judul }}</h2>
                        </a>
                           
                        <small class="fw-bold">Penulis :<a href="/authors/{{ $post->user->username }}" style="color: #41a77e" > {{ $post->user->name }} </a>                         
                            
                        <div class="badge text-bg-danger"><a href="/categories/{{ $post->category->slug }}" class="text-white">{{ $post->category->nama }}</a></div>
                            <a class="text-info">{{ $post->created_at->diffForHumans() }}</a>
                        </small> 
                        

                        <p>{{ $post->excerpt }}</p>

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
        @else
            <p class="text-center fs-4  ">Artikel Tidak Ditemukan</p>    
        @endif
        {{ $article->links() }}
    </div>
</div>
@endsection