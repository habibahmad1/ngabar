@extends('./layouts/main')
@section('content')
<div class="kanvasAll">
    <article>
        <div class="text-center gambarTiapPost">
        <img src="https://source.unsplash.com/1200x400/?{{ $articlePost->category->nama }}"  alt="imgPost" class="rounded mb-3">
        </div>

        <h2>{{ $articlePost->judul }}</h2>

        <h5>By: <a href="/authors/{{ $articlePost->user->username }}" class="text-decoration-none">{{ $articlePost->user->name }}</a> in <a href="/categories/{{ $articlePost->category->slug }}" class="text-decoration-none">{{ $articlePost->category->nama }}</a> </h5>
        
        <p>{{ $articlePost->artikelPost }}</p>
        <a href="/artikel" class="kembaliButton">Back</a>
    </article>
</div>
@endsection

