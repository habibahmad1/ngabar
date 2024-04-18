@extends('./layouts/main')
@section('content')
<center>
    <h1>Halaman Artikel</h1>
</center>
<div class="container-artikel">
    
    <div class="tag">
        <div class="informasi">Informasi</div>
        <div class="pengetahuan">Pengetahuan</div>
        <div class="kuis">Kuis</div>
        <div class="pemberitahuan">Pemberitahuan</div>
    </div>
    <div class="kanvas">
        <div class="category"><a href="/categories">All Category</a></div>
        <div class="artikelPost">
            {{-- Content Informasi --}}
            <div class="content-informasi">
                @foreach ($article as $post)
                    <article class="mb-5"> 
                        <a href="/artikel/{{ $post->slug }}">
                            <h2>{{ $post->judul }}</h2>
                        </a>   
                        <h5>By: {{ $post->penulis }}</h5>
                        <p>{{ $post->excerpt }}</p>
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