<?php session_start(); ?>
<!DOCTYPE html>
  <html lang="es">
  <head>
    <title>TaylorMade</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/~miguel/ProyectoFinalSelley/css.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <script>
    function openNav() {
        document.getElementById("sideNavigation").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("sideNavigation").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
    </script>

  </head>
  <body>

    <div id="sideNavigation" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="bastones.php">Bastones</a>
      <a href="pelotas.php">Pelotas</a>
      <a href="guantes.php">Guantes</a>
      <a href="agregar.php">Agregar a la tienda (solo admin)</a>
      <a href="historial.php">Historial de compras</a>
    </div>

    <nav class="navbar navbar-default" role="navigation">
    <!-- El logotipo y el icono que despliega el menú se agrupan
         para mostrarlos mejor en los dispositivos móviles -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse"
              data-target=".navbar-ex1-collapse">
        <span class="sr-only">Desplegar navegación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <nav class="topnav">
      <a href="#" onclick="openNav()">
        <svg width="30" height="30" id="icoOpen">
            <path d="M0,5 30,5" stroke="#000" stroke-width="3"/>
            <path d="M0,14 30,14" stroke="#000" stroke-width="3"/>
            <path d="M0,23 30,23" stroke="#000" stroke-width="3"/>
        </svg>
      </a>
      </nav>

    </div>
    <div>
      <a href="index.php"><img src="taylor.png" width="100" height="80" class="center"></a>
    </div>

    <!-- Agrupar los enlaces de navegación, los formularios y cualquier
         otro elemento que se pueda ocultar al minimizar la barra -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <div class="btn-group">
              <a href="carrito.php"><button type="button" class="btn btn-default btn-md">
                <span class="glyphicon glyphicon-shopping-cart"></span>
              </button>
              <a href="sesion.php"><button type="button" class="btn btn-default btn-md">
                <span class="glyphicon glyphicon-user"></span>
              </button>
              <a href="buscar.php"><button type="button" class="btn btn-default btn-md">
                <span class="glyphicon glyphicon-search"></span>
              </button></a>
              <a href="logout.php"><button type="button" class="btn btn-default btn-md">
                <span class="glyphicon glyphicon-log-out"></span>
              </button></a>
            </div>
    </div>
  </nav>

  <div class="container">
    <div class="jumbotron">
      <h2>Crear Cuenta</h2>
      <div class="container">
        <form action="insertar.php" method="POST" role="form">
          <div class="form-group">
            <label for="nombre">* Nombre:</label>
            <input type="text" name="nombre" class="form-control" id="nombre">
          </div>
          <div class="form-group">
            <label for="email">* Email:</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="pwd">* Contraseña:</label>
            <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Enter password">
          </div>
          <div class="form-group">
            <label for="nacimiento">* Fecha de nacimiento (DD/MM/AA):</label>
            <input type="text" name="nacimiento"class="form-control" id="nacimiento">
          </div>
          <div class="form-group">
            <label for="tarjeta">* Número de tarjeta (10 digitos):</label>
            <input type="number" name="tarjeta" class="form-control" id="tarjeta">
          </div>
          <div class="form-group">
            <label for="direccion">* Dirección:</label>
            <input type="text" name="direccion" class="form-control" id="direccion">
          </div>
          <div class="form-group">
            <label for="root">* Root (1-sí, 2-no):</label>
            <input type="number" name="root" class="form-control" id="root">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
  </div>

  </body>
  </html>
