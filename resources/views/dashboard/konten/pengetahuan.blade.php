@extends('dashboard.layouts.main')

@section('content')
    <h3 class="my-3">Buat Konten Pengetahuan Baru</h3>
    <form action="{{ route('pengetahuan.store') }}" method="POST" id="kontenForm">
        @csrf
        <p><span style="color: red">Kode Merah </span>yang di pakai sebelum tanda &: https://www.youtube.com/watch?v=<span style="color: red">3nQNiWdeH2Q</span>&ab_channel=NoCopyrightSounds</p>
        <div class="mb-3 col-sm-4">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <label for="judul" class="form-label">Masukan Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" onkeyup="generateSlug()">
            
            <label for="slug" class="form-label mt-3">URL</label>
            <input type="text" class="form-control" name="slug" id="slug" readonly>

            <label for="pengetahuan" class="form-label mt-3">Masukan Kode Unik</label>
            <input type="text" class="form-control" name="pengetahuan">
        </div>
        <button type="submit" class="btn btn-primary">Buat</button>
    </form>

    <script>
        function generateSlug() {
            let judul = document.getElementById('judul').value;
            let slug = judul.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-+|-+$/g, '');
            document.getElementById('slug').value = slug;
        }
    </script>
@endsection
