@extends('./layouts/main')
@section('content')

@php
    $arabic_numbers = ['0' => '٠', '1' => '١', '2' => '٢', '3' => '٣', '4' => '٤', '5' => '٥', '6' => '٦', '7' => '٧', '8' => '٨', '9' => '٩'];

    $convertToArabicNumbers = function($number) use ($arabic_numbers) {
        return strtr($number, $arabic_numbers);
    };
@endphp


<div class="container-detail-quran">
    <h1 class="text-center">Surah ke-{{ $surah['nomor'] }} <span class="badge rounded-pill text-bg-primary">{{ $surah['nama_latin'] }}</span> </h1>

    <div class="card my-3">
        <div class="card-body">
            <p class="badge rounded-pill text-bg-warning fs-6">Jumlah Ayat: {{ $surah['jumlah_ayat'] }}</p>
            <p class="fs-4">{!! $surah['deskripsi'] !!}</p>
        </div>
    </div>

        @foreach ($surah['ayat'] as $ayat)
        <div class="card my-3 detailQuran">
            <div class="card-body">
                <p class="fs-2 fs-sm-1 ayatArab">
                    <span class="badge rounded-pill text-bg-light pb-4 border border-info">
                        {{ $convertToArabicNumbers($ayat['nomor']) }}
                    </span> 
                    {{ $ayat['ar'] }}
                </p>

              <p class="bg-warning-subtle text-warning-emphasis fs-5 p-3 rounded">{{ $ayat['tr'] }}</p>
              
              <p class="badge rounded-pill text-bg-primary fs-4">Artinya <i class="fa-solid fa-arrow-down"></i></p>

              <p class="mb-5 bg-info-subtle text-info-emphasis fs-4 p-3 rounded">{{ $ayat['idn'] }}</p>
            </div>
        </div>
        @endforeach
</div>
    
@endsection