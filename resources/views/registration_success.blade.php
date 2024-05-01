<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro| Kuolix</title>
    <link rel="shortcut icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/landing_page.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;900&display=swap" rel="stylesheet">

  </head>
  <body>
    <!--Encabezado-->
    <header>
      <div class="imagen">
        <img src="./img/logo.png" alt="Logo de kuolix">
      </div>
      <nav>
        <ul class="menu">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('signin') }}">Ingresar</a></li>
        </ul>
      </nav>
    </header>

    <!--Cuerpo-->
    <section class="wrap">
      <section class="main">
        <p>Registro Exitoso</b>.</p>
      </section>
    </section>
  </body>
</html>
