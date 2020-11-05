<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   

    
    <link href="{{ asset('static/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="navbar-brand" href="/">Home<span class="sr-only">(current )</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/suma">Sumar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/resta">Resta</a>
              </li>
            <li class="nav-item">
              <a class="nav-link " href="/multiplicacion">Multiplicar</a>
            </li>
          </ul>
         
        </div>
      </nav>
    
      <div class="container-fluid mt-3">
        @yield('contenido')
      </div>
</body>

</html>