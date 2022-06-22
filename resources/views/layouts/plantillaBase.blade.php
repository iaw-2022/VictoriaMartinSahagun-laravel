<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/lux/bootstrap.min.css">

    <title> Balcon del golf </title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>

  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#toggleMobileMenu"
                    aria-controls="toggleMobileMenu"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse"  id="toggleMobileMenu">
                    <ul class="navbar-nav me-auto">
                        @if (Auth::user()->rol == 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="/cabanas">Cabañas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/huespedes">Huespedes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/hospedados">Hospedados</a>
                            </li>
                        @endif
                        @if(Auth::user()->rol == 'admin' || Auth::user()->rol == 'adminComidas')
                            <li class="nav-item">
                                <a class="nav-link" href="/comidas">Comidas</a>
                            </li>
                        @endif
                        @if(Auth::user()->rol == 'admin' || Auth::user()->rol == 'adminActividades')
                            <li class="nav-item">
                                <a class="nav-link" href="/actividades">Actividades</a>
                            </li>
                        @endif
                        @if(Auth::user()->rol == 'admin')
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reservas</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/reservas/comidas">Comidas</a>
                                    <a class="dropdown-item" href="/reservas/actividades">Actividades</a>
                                </div>
                            </li>
                        @endif
                        @if(Auth::user()->rol == 'adminComidas')
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reservas</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/reservas/comidas">Comidas</a>
                                </div>
                            </li>
                        @endif
                        @if(Auth::user()->rol == 'adminActividades')
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reservas</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/reservas/actividades">Actividades</a>
                                </div>
                            </li>
                        @endif
                    </ul>
                    <form method="POST" action="{{ route('logout') }}">
                         @csrf
                        <button type="button" class="btn btn-warning" :href="route('logout')"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                            {{ __('Cerrar sesión') }}
                        </button>
                    </form>
                </div>
            </div>
        </nav>

    @yield('contenido')
    </body>
</html>