@extends('dashboard.layouts.main')
@section('content')
    <h3 class="my-3">Buat Konten Hiburan Baru</h3>
    <form action="/dashboard/addhiburan" method="POST">
        @method('post')
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

            <label for="hiburan" class="form-label">Masukan Kode Unik</label>
            <input type="text" class="form-control" name="hiburan">
        </div>
        <button type="submit" class="btn btn-primary">Buat</button>
    </form>
@endsection