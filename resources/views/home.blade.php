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
    <div class="content text-center">
        <div><img src="/img/logo.png" alt="logo" id="logo" style="max-width: 400px;"></div>
        <div>
          @if(Auth::user()->rol == 'admin')
            <a type="button" class="btn btn-primary" href="/cabanas">Cabañas</a>
            <a type="button" class="btn btn-primary" href="/huespedes">Huespedes</a>
            <a type="button" class="btn btn-primary" href="/hospedados">Hospedados</a>
          @endif
          @if(Auth::user()->rol == 'admin' || Auth::user()->rol == 'adminComidas')
            <a type="button" class="btn btn-primary" href="/comidas">Comidas</a>
            <a type="button" class="btn btn-primary" href="/reservas/comidas">Reservas comidas</a>
          @endif
          @if(Auth::user()->rol == 'admin' || Auth::user()->rol == 'adminActividades')
            <a type="button" class="btn btn-primary" href="/actividades">Actividades</a>
            <a type="button" class="btn btn-primary" href="/reservas/actividades">Reservas actividades</a>
          @endif
        </div>
        <div class="mt-5">
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
  </body>
</html>