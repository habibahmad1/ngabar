@extends('./layouts/main')
@section('content')
<h1 class="text-center">Halaman Galeri</h1>
    <div class="container-galeri">
        @foreach ($galeri as $item)
            
        <div class="boxImg">
            <img src="https://source.unsplash.com/500x400?japan" alt="" class="img-fluid" >
            
            <div class="galeriKategori"><a href="" class="text-decoration-none text-white">Pemandangan</a></div>

            <div class="judulGaleri">
                <a href="/detail/{{ $item->id }}" class="text-decoration-none text-white"><h5 class="mx-3">{{ $item->judul }}</h5></a>

                <p>{{ $item->kategoriGaleri->nama }}</p>
            </div>
        </div>

        @endforeach
    </div>
@endsection