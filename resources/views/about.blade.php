@extends('./layouts/main')
@section('content')
        <h1>Halaman About</h1>
        <h3>{{ $title }}</h3>
        <p>{{ $description }}</p>
        <img src="./img/{{ $image }}" alt="picture" width="200" />
@endsection
