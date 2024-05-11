@extends('./dashboard.layouts.main')

@section('content')

<div class="kanvasAll">
    <article class="setiapArtikel">
        
        <h2>{{ $artikel->judul }}</h2>

        <a href="" class="badge bg-success py-2"><i class="fa-solid fa-pencil"> Edit</i></a>
        <a href="" class="badge bg-danger py-2"><i class="fa-solid fa-trash-can"> Delete</i></i></a>

        <div class="text-center gambarTiapPost mb-4 mt-1">
            <img src="https://source.unsplash.com/1200x400?{{ $artikel->category->nama }}"  alt="imgPost" class="rounded mb-3">
        </div> 

        <h6 class="fw-bold mb-3">Penulis :<a href="/authors/{{ $artikel->user->username }}" style="color: #41a77e" class="text-decoration-none"> {{ $artikel->user->name }} </a>                         
                            
            <div class="badge text-bg-danger"><a href="/categories/{{ $artikel->category->slug }}" class="text-white text-decoration-none">{{ $artikel->category->nama }}</a></div>
            <a class="text-info text-decoration-none">{{ $artikel->created_at->diffForHumans() }}</a>
            </h6> 

        <p>{!! $artikel->artikelPost !!}</p>
        <a href="/dashboard/artikel" class="kembaliButton my-5"><i class="fa-solid fa-arrow-left-long"></i> Back</a>
    </article>
</div>

@endsection