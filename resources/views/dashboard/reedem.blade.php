@extends('./dashboard/layouts/main')

@section('content')
<center>
   <h2>Redeem Code</h2> 
</center>
    <div class="row">
        <div class="col-md-6 mx-auto justifiy-content-center">
                {{-- Alert Success Register --}}
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            {{-- Alert Success Register --}}
            @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif 
        </div>
    </div>
    


    <form class="container-reedem" action="{{ route('reedem') }}" method="POST">
        @csrf
        <label for="code">Masukan Kode Redeem</label>
        <input type="text" id="code" name="code" required>
        <button class="btn btn-primary my-3 px-5" type="submit" >Redeem</button>
    </form>



@endsection