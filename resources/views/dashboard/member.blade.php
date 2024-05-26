@extends('./dashboard.layouts.main')

@section('content')
<center>
    <h1 class="my-2">Siapa yang Online</h1>
</center>
<div class="container-table">
    <table id="myTable" cellpadding="10">
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
      @foreach ($data as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->name }}</td>
        <td>
          @if ($item->last_active && $item->last_active->diffInMinutes() < 1)
              <p class="online d-inline">Online</p> 
          @else
              Offline
          @endif
        </td>
        <td><a href="#" onclick="alert('Dalam Pengembangan')" class="text-decoration-none"><i class="fa-brands fa-rocketchat"></i> Chat</a></td>
      </tr>
      @endforeach
    </table>
</div>

@endsection