@extends('./layouts/main')
@section('content')

<h1>Post Category : {{ $category }}</h1>
<div class="kanvas">
    <div class="artikelPost">
        <div class="content-informasi">
            @foreach ($artikelPost as $post)
                <article class="mb-5"> 
                  <a href="/artikel/{{ $post->slug }}">
                      <h2 style="color: #41a77e">{{ $post->judul }}</h2>
                  </a>   
                  <h5>By: {{ $post->user->name }} in <span style="color: #41a77e">{{ $post->category->nama }}</span></h5>
                  <p>{{ $post->excerpt }}</p>
                </article>
            @endforeach
        </div>
    </div>
</div>


@endsection

