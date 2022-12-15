<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="text-bg-dark p-3">
    <div class="container my-5">
        <a href="{{ route('xIndex') }}" class="btn btn-primary">Inicio</a>
        <a href="{{ route('xGaleria') }}" class="btn btn-danger">Galeria</a>
        <a href="{{ route('dashboard') }}" class="btn btn-success">Lista</a>
        <a href="{{ route('xIndex') }}" class="btn btn-warning">Curso</a>
        <a href="{{ route('xIndex') }}" class="btn btn-info">Seguimiento</a>
    </div>

    <div class="container my-5">
        @yield('Titulo del mochito')
    </div>

    <div class="container my-5">
        @yield('seccion')
    </div>

    <div class="container bg-info text-danger text-center">
        Pie de pagina del mochito
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </div>
  </body>
</html>