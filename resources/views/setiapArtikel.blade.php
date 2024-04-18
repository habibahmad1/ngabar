@extends('./layouts/main')
@section('content')
<div class="kanvasAll">
    <article>
        <h2>{{ $articlePost->judul }}</h2>
        <h5>By: {{ $articlePost->penulis }} in <a href="/categories/{{ $articlePost->category->slug }}">{{ $articlePost->category->nama }}</a> </h5>
        <p>{{ $articlePost->artikelPost }}</p>
        <a href="/artikel" class="kembaliButton">Back</a>
    </article>
</div>
@endsection

