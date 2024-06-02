@extends('./dashboard.layouts.main')

@section('content')

<div class="kanvasAll">
    <article class="setiapArtikel">
        
        <h2>{{ $allgaleri->judul }}</h2>
        <form action="/dashboard/allgaleri/{{ $allgaleri->id }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0 py-2" onclick="return confirm('Yakin Mau Hapus?')"><i class="fa-solid fa-trash-can"></i> Delete</button>
          </form>

        @if ($allgaleri->image)

            <div class="text-center gambarTiapPost mb-4 mt-1">
                <img src="{{ asset('storage/' . $allgaleri->image) }}"  alt="imgPost" class="rounded my-3">
            </div> 
        
        @else
            <div class="text-center gambarTiapPost mb-4 mt-1">
                <img src="https://picsum.photos/seed/{{ $allgaleri->kategoriGaleri->nama }}/1200/600"  alt="imgPost" class="rounded my-3">
            </div> 
        @endif

        <h6 class="fw-bold mb-3">Penulis :<a href="/authors/{{ $allgaleri->user->username }}" style="color: #41a77e" class="text-decoration-none"> {{ $allgaleri->user->name }} </a>                         
                            
            <div class="badge text-bg-danger"><a href="/categories/{{ $allgaleri->kategoriGaleri->id }}" class="text-white text-decoration-none">{{ $allgaleri->kategoriGaleri->nama }}</a></div>
            <a class="text-info text-decoration-none">{{ $allgaleri->created_at->diffForHumans() }}</a>
            </h6> 

        <p>{!! $allgaleri->galeriPost !!}</p>
        <a href="/dashboard/allgaleri" class="kembaliButton my-5"><i class="fa-solid fa-arrow-left-long"></i> Back</a>
    </article>
</div>

@endsection