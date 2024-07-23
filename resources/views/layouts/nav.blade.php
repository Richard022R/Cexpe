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
          <li class="nav-item active">
            <a class="nav-link" href="/personas">Personas</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                </li>
            @endguest
        </ul>
      </div>
    </div>
  </nav>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>