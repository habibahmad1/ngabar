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
                @foreach ($article as $post)
                    <article class="mb-5"> 
                        <a href="/artikel/{{ $post->slug }}">
                            <h2 style="color: #41a77e">{{ $post->judul }}</h2>
                        </a>   
                        <h5>By: <a href="/authors/{{ $post->user->username }}" style="color: #41a77e">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" style="color: #41a77e">{{ $post->category->nama }}</a> </h5>
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
    </div>
    
</div>
@endsection