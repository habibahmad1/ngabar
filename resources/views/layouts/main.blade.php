<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ngabar | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="https://cdn.iconscout.com/icon/free/png-256/free-chat-2639493-2187526.png?f=webp" type="image/png">
  </head>
  <body>
   
    @include("./partials/navbar")

      <div class="container mt-4">
        @yield('content')
      </div>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/4f83e01807.js" crossorigin="anonymous"></script>
          
    {{-- JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- My JS --}}
    <script src="./js/script.js"></script>
  </body>
</html> 