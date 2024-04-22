@extends('./layouts/main')
@section('content')
<h1 class="text-center">Detail Galeri</h1>
    <div class="detailGaleri">
        <div class="boxDetail">
            <h2 style="color: black">{{ $galeriDetail->judul }}</h2>
            <div class="galeriTiapKategori"><a href="" class="text-decoration-none text-white">Pemandangan</a></div>
            <img src="https://source.unsplash.com/1200x600?japan" alt="">

            {{-- unduh gambar --}}
            <a href="https://source.unsplash.com/1200x600?japan" target="_blank" class="downloadGambar" download> <i class="fa-solid fa-download"></i></a>

            {{-- Laporkan --}}
            <a href="" class="lapor"><i class="fa-solid fa-flag"></i></a>

            <div class="clearfix"></div>
            
            <h5>Deskripsi : </h5>
            <p>{{ $galeriDetail->deskripsi }}</p>
            <a href="/galeri" class="kembaliButton mt-5">Back</a>

        </div>
    </div>
@endsection