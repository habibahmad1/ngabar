@extends('./dashboard.layouts.main')

@section('content')

<div class="kanvasAll">
    <article class="setiapArtikel">
        
        <h2>{{ $galeri->judul }}</h2>

        <a href="/dashboard/galeri/{{ $galeri->slug }}/edit" class="badge bg-success py-2 text-decoration-none"><i class="fa-solid fa-pencil"></i> Edit</a>
        <form action="/dashboard/galeri/{{ $galeri->slug }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0 py-2" onclick="return confirm('Yakin Mau Hapus?')"><i class="fa-solid fa-trash-can"></i> Delete</button>
          </form>

        @if ($galeri->img)

            <div class="text-center gambarTiapPost mb-4 mt-1">
                <img src="{{ asset('storage/' . $galeri->img) }}"  alt="imgPost" class="rounded mb-3">
            </div> 
        
        @else
            <div class="text-center gambarTiapPost mb-4 mt-1">
                <img src="https://source.unsplash.com/1200x400?{{ $galeri->kategoriGaleri->nama }}"  alt="imgPost" class="rounded mb-3">
            </div> 
        @endif

        <h6 class="fw-bold mb-3">Upload :<a href="/authors/{{ $galeri->user->username }}" style="color: #41a77e" class="text-decoration-none"> {{ $galeri->user->name }} </a>                         
                            
            <div class="badge text-bg-danger"><a href="/categories/{{ $galeri->kategoriGaleri->id }}" class="text-white text-decoration-none">{{ $galeri->kategoriGaleri->nama }}</a></div>
            <a class="text-info text-decoration-none">{{ $galeri->created_at->diffForHumans() }}</a>
            </h6> 

        <p>{!! $galeri->galeriPost !!}</p>
        <a href="/dashboard/galeri" class="kembaliButton my-5"><i class="fa-solid fa-arrow-left-long"></i> Back</a>
    </article>
</div>

@endsection