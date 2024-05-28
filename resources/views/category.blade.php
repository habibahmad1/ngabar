@extends('./layouts/main')
@section('content')

<h1 class="text-center my-4">Artikel Category : {{ $category }}</h1>
<div class="kanvas">
    <div class="artikelPost">
        <div class="content-informasi">
            @foreach ($artikelPost as $post)
                <article class="mb-5"> 
                  <div class="text-center gambarTiapPost">
                        <img src="https://picsum.photos/seed/{{ $post->category->nama }}/1200/600"  alt="imgPost" class="rounded mb-3">
                  </div>
                  <a href="/artikel/{{ $post->slug }}">
                      <h2 style="color: #41a77e">{{ $post->judul }}</h2>
                  </a> 

                  <small class="fw-bold">By: <a href="/authors/{{ $post->user->username }}" style="color: #41a77e" > {{ $post->user->name }} </a>                         
                            
                    <div class="badge text-bg-danger"><a href="/categories/{{ $post->category->slug }}" class="text-white">{{ $post->category->nama }}</a></div>
                        <a class="text-info">{{ $post->created_at->diffForHumans() }}</a>
                  </small> 
                    
                  <p>{{ $post->excerpt }}</p>

                  <a href="/artikel/{{ $post->slug }}" class="more" style="color: white">Baca Selengkapnya</a>
                </article>
            @endforeach
        </div>
    </div>
</div>


@endsection

