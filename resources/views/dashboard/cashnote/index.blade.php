@extends('dashboard.layouts.main')

@section('content')
<h3 class="my-3">Catatan Keuangan</h3>
<hr>

@if(auth()->user()->role == 'Member' )
@else
<a href="/dashboard/cashnote/create" class="btn btn-primary my-3">Tambah Catatan</a>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container-cash-note">
    <table class="table">
        <thead>
            <tr class="table-success">
                <th scope="col">Di Tambahkan Oleh</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Harga Satuan</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Tanggal</th>
                @if(auth()->user()->role == 'Member' )
                @else
                <th scope="col">Aksi</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($cashnotes as $cashnote)
                <tr>
                    <td>{{ $cashnote->user->name }}</td>
                    <td>{{ $cashnote->nama_barang }}</td>
                    <td>{{ $cashnote->jumlah_barang }}</td>
                    <td>{{ $cashnote->harga_satuan }}</td>
                    <td>{{ $cashnote->jumlah_barang * $cashnote->harga_satuan }}</td>
                    <td>{{ Carbon\Carbon::parse($cashnote->created_at)->format('d-M-Y') }}</td>
                    @if(auth()->user()->role == 'Member' )
                    @else
                    <td>
                        <form action="{{ route('cashnote.destroy', $cashnote->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="border-0 badge bg-danger" onclick="return confirm('Yakin Mau Hapus?')"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                    @endif
                    </tr>
            @endforeach
        </tbody>
    </table>       
    <div class="d-flex justify-content-center">
        {{ $cashnotes->links() }}
    </div>
</div>
@endsection
