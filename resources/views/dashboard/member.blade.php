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
        <td class="online"><i class="fa-solid fa-circle" style="font-size: 12px"></i> Online</td>
        <td><a href="#" onclick="alert('Dalam Pengembangan')" class="text-decoration-none"><i class="fa-brands fa-rocketchat"></i> Chat</a></td>
      </tr>
      @endforeach
    </table>
</div>

@endsection