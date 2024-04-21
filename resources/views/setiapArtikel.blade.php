@extends('./layouts/main')
@section('content')
<div class="kanvasAll">
    <article class="setiapArtikel">
        
        <h2>{{ $articlePost->judul }}</h2>

        <div class="text-center gambarTiapPost my-4">
            <img src="https://source.unsplash.com/1200x400?{{ $articlePost->category->nama }}"  alt="imgPost" class="rounded mb-3">
        </div> 

        <h6 class="fw-bold mb-3">Penulis :<a href="/authors/{{ $articlePost->user->username }}" style="color: #41a77e" class="text-decoration-none"> {{ $articlePost->user->name }} </a>                         
                            
            <div class="badge text-bg-danger"><a href="/categories/{{ $articlePost->category->slug }}" class="text-white text-decoration-none">{{ $articlePost->category->nama }}</a></div>
            <a class="text-info text-decoration-none">{{ $articlePost->created_at->diffForHumans() }}</a>
            </h6> 

        <p>{!! $articlePost->artikelPost !!}</p>
        <a href="/artikel" class="kembaliButton">Back</a>
    </article>
</div>
@endsection

