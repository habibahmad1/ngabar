@extends('./dashboard.layouts.main')

@section('content')

<div class="kanvasAll">
    <article class="setiapArtikel">
        
        <h2>{{ $artikel->judul }}</h2>

        <a href="/dashboard/artikel/{{ $artikel->slug }}/edit" class="badge bg-success py-2 text-decoration-none"><i class="fa-solid fa-pencil"></i> Edit</a>
        <form action="/dashboard/artikel/{{ $artikel->slug }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0 py-2" onclick="return confirm('Yakin Mau Hapus?')"><i class="fa-solid fa-trash-can"></i> Delete</button>
          </form>

        @if ($artikel->image)

            <div class="text-center gambarTiapPost mb-4 mt-1">
                <img src="{{ asset('storage/' . $artikel->image) }}"  alt="imgPost" class="rounded my-3">
            </div> 
        
        @else
            <div class="text-center gambarTiapPost mb-4 mt-1">
                <img src="https://picsum.photos/seed/{{ $artikel->category->nama }}/1200/600"  alt="imgPost" class="rounded my-3">
            </div> 
        @endif

        <h6 class="fw-bold mb-3">Penulis :<a href="/authors/{{ $artikel->user->username }}" style="color: #41a77e" class="text-decoration-none"> {{ $artikel->user->name }} </a>                         
                            
            <div class="badge text-bg-danger"><a href="/categories/{{ $artikel->category->slug }}" class="text-white text-decoration-none">{{ $artikel->category->nama }}</a></div>
            <a class="text-info text-decoration-none">{{ $artikel->created_at->diffForHumans() }}</a>
            </h6> 

        <p>{!! $artikel->artikelPost !!}</p>
        <a href="/dashboard/artikel" class="kembaliButton my-5"><i class="fa-solid fa-arrow-left-long"></i> Back</a>
    </article>
</div>

@endsection