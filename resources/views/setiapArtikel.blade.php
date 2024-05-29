@extends('./layouts/main')
@section('content')
<div class="kanvasAll">
    <article class="setiapArtikel">

        @if(session()->has('success')) 
            <div class="alert alert-success" role="alert">
            {{ session('success') }}
            </div>  
        @endif
        
        <h2>{{ $articlePost->judul }}</h2>
        @if ($articlePost->image)

            <div class="text-center gambarTiapPost my-4" style="max-height: 350px; overflow:hidden">
            <img src="{{ asset('storage/' . $articlePost->image) }}"  alt="imgPost" class="rounded">
        </div> 
    
        @else
            <div class="text-center gambarTiapPost my-4">
                <img src="https://picsum.photos/seed/{{ $articlePost->category->nama }}/1200/400"  alt="imgPost" class="rounded mb-3">
            </div> 
        @endif

        <h6 class="fw-bold mb-3">Penulis :<a href="/authors/{{ $articlePost->user->username }}" style="color: #41a77e" class="text-decoration-none"> {{ $articlePost->user->name }} </a>                         
                            
            <div class="badge text-bg-danger"><a href="/categories/{{ $articlePost->category->slug }}" class="text-white text-decoration-none">{{ $articlePost->category->nama }}</a></div>
            <a class="text-info text-decoration-none">{{ $articlePost->created_at->diffForHumans() }}</a>
            </h6> 

        <p class="bodyArtikel">{!! $articlePost->artikelPost !!}</p>
        <a href="/artikel" class="kembaliButton">Back</a>
        
        @auth
        <form action="/artikel/{{ $articlePost->slug }}/komentar" method="POST" class="my-5">
            @csrf
            <div class="form-group">
                <label for="content" class="my-3"><b>{{ $komentar->count() }} Komentar</b></label>
                <textarea name="content" id="content" class="form-control" rows="3" required placeholder="Ketik Komentar disini"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2 float-end border-0">Kirim</button>
        </form>
        
        @else
            <p>Silakan <a href="/login">Login</a> untuk menambahkan komentar.</p>
        @endauth
        @foreach ($komentar as $item)
            <div>
                <img src="../img/pw.jpg" alt="" class="imProfil"><p class="d-inline-block ml-3" style="margin-left: 10px">{{ $item->user->name }}</p> <span class="text-info fw-bold" style="float: right">{{ $item->created_at->diffForHumans() }}
                </span>
                <div class="komens">{{ $item->content }}</div>
                @if (auth()->check() && auth()->user()->id === $item->user_id)
                <form action="/artikel/{{ $item->id }}/deletekomen" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0 trash-icons" onclick="return confirm('Yakin Mau Hapus?')" type="submit"><i class="fa-solid fa-trash-can"></i></button>
                  </form>
                  @endif
            </div>
            <hr style="margin: 10px 0; background-color:grey">
        @endforeach
        
    </article>
</div>
@endsection

