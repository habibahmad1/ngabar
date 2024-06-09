@extends('./layouts/main')
@section('content')


<div class="container-quran">
    <h1 class="text-center">Cari Surah</h1>
    <div class="search">
        <form action="/quran">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari Surah atau Isi Surah, Contoh: Surga" name="search" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit" >Search</button>
              </div>
        </form>
    </div>

    <div class="row">
        @foreach ($surah as $surah)
            <div class="col-lg-3 col-md-4 col-sm-12">
                <a href="/quran/detail/{{ $surah['nomor'] }}" class="text-decoration-none">
                    <div class="card my-3 cardSurah">
                        <div class="card-body">
                            <h4 class="card-title text-primary">{{ $surah['nomor'] }}. {{ $surah['nama_latin'] }}</h4>
                            <h2 class="card-subtitle mb-2 text-body-secondary float-end">{{ $surah['nama'] }}</h2>
                            
                            <p class="card-text" style="text-transform: uppercase">{{ $surah['tempat_turun'] }}</p>
        
                            <p class="card-text badge rounded-pill text-bg-warning">{{ $surah['arti'] }}</p>
                            
                            <p class="card-text">Jumlah Ayat : {{ $surah['jumlah_ayat'] }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>


@endsection