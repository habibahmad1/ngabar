@extends('./layouts/main')
@section('content')

<h1>All Category </h1>
<div class="kanvas">
    <div class="artikelPost">
        <div class="content-informasi">
            @foreach ($categories as $category)
                <article class="mb-5 mt-5 text-center"> 
                    <div class="text-center gambarTiapPost">
                        <img src="https://source.unsplash.com/400x200/?{{ $category->nama }}"  alt="imgPost" class="rounded mb-3">
                    </div>
                  <a href="/categories/{{ $category->slug }}">
                      <h2>{{ $category->nama }}</h2>
                  </a>   
                  
                </article>
                @endforeach
            </div>
            <a href="/artikel" class="kembaliButton">Back</a>
    </div>
</div>

@endsection

