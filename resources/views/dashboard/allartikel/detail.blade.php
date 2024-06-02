@extends('./dashboard.layouts.main')

@section('content')

<div class="kanvasAll">
    <article class="setiapArtikel">
        
        <h2>{{ $allartikel->judul }}</h2>
        <form action="/dashboard/allartikel/{{ $allartikel->slug }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0 py-2" onclick="return confirm('Yakin Mau Hapus?')"><i class="fa-solid fa-trash-can"></i> Delete</button>
          </form>

        @if ($allartikel->image)

            <div class="text-center gambarTiapPost mb-4 mt-1">
                <img src="{{ asset('storage/' . $allartikel->image) }}"  alt="imgPost" class="rounded my-3">
            </div> 
        
        @else
            <div class="text-center gambarTiapPost mb-4 mt-1">
                <img src="https://picsum.photos/seed/{{ $allartikel->category->nama }}/1200/600"  alt="imgPost" class="rounded my-3">
            </div> 
        @endif

        <h6 class="fw-bold mb-3">Penulis :<a href="/authors/{{ $allartikel->user->username }}" style="color: #41a77e" class="text-decoration-none"> {{ $allartikel->user->name }} </a>                         
                            
            <div class="badge text-bg-danger"><a href="/categories/{{ $allartikel->category->slug }}" class="text-white text-decoration-none">{{ $allartikel->category->nama }}</a></div>
            <a class="text-info text-decoration-none">{{ $allartikel->created_at->diffForHumans() }}</a>
            </h6> 

        <p>{!! $allartikel->artikelPost !!}</p>
        <a href="/dashboard/allartikel" class="kembaliButton my-5"><i class="fa-solid fa-arrow-left-long"></i> Back</a>
    </article>
</div>

@endsection