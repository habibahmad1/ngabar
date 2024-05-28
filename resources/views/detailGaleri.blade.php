@extends('./layouts/main')
@section('content')
<h1 class="text-center">Detail Galeri</h1>
    <div class="detailGaleri">
        <div class="boxDetail">

            <h2 style="color: black" class="mb-3">{{ $galeriDetail->judul }}</h2>

            <a href="/uploaded/{{ $galeriDetail->user->username }}" class="detailUploadBy"><img src="../img/pw.jpg" alt="" class="imProfil"> {{ $galeriDetail->user->name }}</a>

            <span class="text-info fs-6 float-end">{{ $galeriDetail->created_at->diffForHumans() }}</span>

            <div class="galeriTiapKategori"><a href="/kategoriGaleri/{{ $galeriDetail->kategoriGaleri->slug }}" class="text-decoration-none text-white">{{ $galeriDetail->kategoriGaleri->nama }}</a>
            </div>

            @if ($galeriDetail->img)
                <img src="{{ asset('storage/' . $galeriDetail->img) }}" alt="">
            @else
                <img src="https://picsum.photos/seed/{{ $galeriDetail->kategoriGaleri->nama }}/1200/600" alt="">
            @endif
            
            {{-- unduh gambar --}}
            <a href="https://source.unsplash.com/1200x600?japan" target="_blank" class="downloadGambar" download> <i class="fa-solid fa-download"></i> Unduh</a>

            {{-- Laporkan --}}
            <a href="" class="lapor"><i class="fa-solid fa-flag"></i> Lapor</a>


            <div class="clearfix"></div>

            <a href="/galeri" class="kembaliButton mt-5">Back</a>

        </div>
    </div>
@endsection