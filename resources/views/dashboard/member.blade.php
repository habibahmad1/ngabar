@extends('./dashboard.layouts.main')

@section('content')
<center>
    <h1 class="my-2">Siapa yang Online</h1>
</center>
<div class="container-table">
    <table id="myTable" class="table table-striped">
        <thead class="table-success">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr class="table-warning">
                <td>{{ $loop->iteration }}</td>
                
                <td class="text-start">
                    @if ($item->image)
                        <img src="{{ asset('storage/'.$item->image) }}" alt="" class="rounded-circle" width="50px" height="50px">
                    @else
                        <img src="../img/pw.jpg" alt="" class="rounded-circle" width="50px" height="50px">
                    @endif

                    {{ $item->name }}
                </td>

                <td>
                    @if ($item->last_active && $item->last_active->diffInMinutes() < 1)
                        <p class="online d-inline">Online</p> 
                    @else
                        Offline
                    @endif
                </td>
                <td>
                    @if(auth()->user()->id != $item->id)
                        <a href="#" onclick="alert('Dalam Pengembangan')" class="text-decoration-none"><i class="fa-brands fa-rocketchat"></i> Chat</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
