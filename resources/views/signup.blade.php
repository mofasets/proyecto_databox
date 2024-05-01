<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrarse | Kuolix</title>
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
        <img src="./img/logo.png" alt="Logo">
      </div>
      <nav>
        <ul class="menu">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('signin') }}">Ingresar</a></li>
          <li><a href="{{ route('signup') }}">Registrarse</a></li>
        </ul>
      </nav>
    </header>

    <!--Cuerpo-->
    <section class="wrap">
      <section class="main">
        <div class="logo">
          <img src="./img/logo.png" alt="Logo">
        </div>
        <h2>Registrarse | Kuolix</h2>
        <form action="{{ route('store') }}" class= "formulario" method="POST">
          @csrf
          <label for="name">Nombre:</label>
          <input type="text" name="name" placeholder="Escribe tu nombre"maxlength="20" id="name">

          <label for="last_name">Apellido:</label>
          <input type="text" name="last_name"placeholder="Escribe tu apellido" id="last_name">

          <label for="password">Contraseña:</label>
          <input type="password" name="password" placeholder="Escribe tu Contraseña" maxleng th="20" id="password">

          <label for="phone_number">Número telefónico:</label>
          <input type="tel" name="phone_number"placeholder="Escribe tu número de teléfono"id="phone_number">

          <label for="email">Email:</label>
          <input type="email" name="email"placeholder="Correo Electrónico" id="email">

          <label for="datebirth">Fecha de nacimiento:</label>
          <input type="date" name="datebirth" id="datebirth">

          <label for="sex_id">Sexo:</label>

          <div class="admin">          
            <input type="checkbox" name="is_admin"placeholder="" id="is_admin">
            <p>Este Usuario Es Administrador</p>
          </div>


          <div class="selection">
            <input type="radio" name="sexo" value="h" id="h">
            <label for="h">Hombre</label>
            <input type="radio" name="sexo" value="m" id="m">
            <label for="m">Mujer</label>
            <input type="radio" name="sexo" value="ot" id="ot">
            <label for="ot">Otro</label>
            <input type="radio" name="sexo" value="nd" id="nd">
            <label for="nd">Prefiero no decir</label>
          </div>
          <input type="submit" value="Registrarse">
        </form>
      </section>
    </section>
  </body>
</html>
