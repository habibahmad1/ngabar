@extends('./layouts/main')
@section('content')

<h1>Post Category : {{ $category }}</h1>
<div class="kanvas">
    <div class="artikelPost">
        <div class="content-informasi">
            @foreach ($artikelPost as $post)
                <article class="mb-5"> 
                  <a href="/artikel/{{ $post->slug }}">
                      <h2>{{ $post->judul }}</h2>
                  </a>   
                  <h5>By: {{ $post->penulis }}</h5>
                  <p>{{ $post->excerpt }}</p>
                </article>
            @endforeach
        </div>
    </div>
</div>


@endsection

