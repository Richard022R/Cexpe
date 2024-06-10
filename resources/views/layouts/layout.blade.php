<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">CEXPE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item {{ setActivo('inicio') }}">
            <a class="nav-link" href="/">Inicio</a>
          </li>
          <li class="nav-item {{ setActivo('programas') }}">
            <a class="nav-link" href="/programas">Programas</a>
          </li>
          <li class="nav-item {{ setActivo('talleres') }}">
            <a class="nav-link" href="/talleres">Talleres</a>
          </li>
          <li class="nav-item {{ setActivo('asesoramiento') }}">
            <a class="nav-link" href="/asesoramiento">Asesoramiento</a>
          </li>
          <li class="nav-item {{ setActivo('contacto') }}">
            <a class="nav-link" href="/contacto">Contacto</a>
          </li>
          <li class="nav-item {{ setActivo('persona') }}">
            <a class="nav-link" href="/personas">Personas</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container mt-5">
    @yield('content')
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

