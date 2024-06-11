@extends('./layouts/main')
@section('content')

<h1 class="text-center my-3">{{ $judulPage }} </h1>
<div class="kanvas">
    <div class="artikelPost">
        <div class="content-informasi">
            @foreach ($kategoriGaleri as $category)
                <article class="mb-5 mt-5 text-center position-relative">
                  <a href="/kategoriGaleri/{{ $category->slug }}"> 
                    <div class="text-center gambarTiapPost">
                        <img src="https://picsum.photos/seed/{{ $category->nama }}/600/400" alt="imgPost" class="rounded">
                    </div>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                       <p>
                      <h2 class="text-white rounded" style="background-color: rgba(249, 48, 48, 0.6); padding: 10px 70px;">{{ $category->nama }}</h2>
                        </p> 
                    </div>
                  </a>
                </article>
                @endforeach
            </div>
            <a href="/galeri" class="kembaliButton">Back</a>
    </div>
</div>

@endsection

