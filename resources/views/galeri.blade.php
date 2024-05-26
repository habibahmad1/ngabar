@extends('./layouts/main')
@section('content')
<h1 class="text-center">{{ $judulPage }}</h1>
<center>
    <div class="category"><a href="/kategoriGaleri">All Category</a></div>
</center>
    <div class="container-galeri">
        <div class="container-galeris">

            @foreach ($galeri as $item)
            <div class="boxImg m-4">
                @if ($item->img)
                
                    <img src="{{ asset('storage/' . $item->img) }}"  alt="imgPost" class="img-fluid">
                @else

                <img src="https://source.unsplash.com/500x400?{{ ($item->kategoriGaleri->nama == 'Kegiatan') ? 'Wallpaper' : $item->kategoriGaleri->nama }}" alt="" class="img-fluid">
                @endif
    
                
                <div class="galeriKategori"><a href="/kategoriGaleri/{{ $item->kategoriGaleri->slug }}" class="text-decoration-none text-white">{{ $item->kategoriGaleri->nama }}</a></div>
    
                <div class="judulGaleri">
                    <a href="/detail/{{ $item->id }}" class="text-decoration-none text-white"><h5 class="mx-3 mt-2">{{ $item->judul }}</h5></a>
    
                    <a href="/uploaded/{{ $item->user->username }}" class="uploadBy"><img src="../img/pw.jpg" alt="" class="imProfil"> {{ $item->user->name }}</a>
    
                    
    
                    <p>{{ $item->created_at->diffForHumans() }}</p>
                </div>
            </div>
    
            @endforeach
        </div>
        <div class="paginate justify-content-center d-flex text-white mt-3">
            {{ $galeri->links() }}
        </div>
    </div>
@endsection