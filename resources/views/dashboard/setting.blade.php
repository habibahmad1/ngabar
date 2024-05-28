@extends('./dashboard/layouts/main')

@section('content')

    <h1>Settings</h1>

    <div class="container-setting">
        <div class="tema">
            <p><i class="fa-solid fa-circle-half-stroke"></i> Tema</p>
            <div>
                <p id="modeTema">Light </p>
                <div class="boxTema">
                    <p class="light">Light</p>
                    <p class="dark">Dark</p>
                </div>
            </div>
        </div>
        <div class="musik">
            <p><i class="fa-solid fa-music"></i> Musik</p>
            <div>
                <p id="modeMusik">Off </p>
                <div class="boxMusik">
                    <p class="off">Off</p>
                    <p class="on">On</p>
                </div>
            </div>
        </div>
    </div>

@endsection