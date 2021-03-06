<?php
  session_start();
?>
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

  <div class="container" style>
    <div class="jumbotron">
      <h2>Agregar Producto</h2>
      <div class="container">
        <form action="agregarproducto.php" method="POST" role="form">
          <div class="form-group">
            <label for="nombre">* Nombre del producto:</label>
            <input type="text" name="nombre" class="form-control" id="nombre">
          </div>
          <div class="form-group">
            <label for="precio">* Precio:</label>
            <input type="number" name="precio" class="form-control" id="precio">
          </div>
          <div class="form-group">
            <label for="descripcion">* Descripción:</label>
            <input type="text" name="descripcion" class="form-control" id="descripcion">
          </div>
          <div class="form-group">
            <label for="almacen">* Cantidad en Almacén:</label>
            <input type="number" name="almacen"class="form-control" id="almacen">
          </div>
          <div class="form-group">
            <label for="fabricante">* Fabricante:</label>
            <input type="text" name="fabricante" class="form-control" id="fabricante">
          </div>
          <div class="form-group">
            <label for="origen">* Origen:</label>
            <input type="text" name="origen" class="form-control" id="origen">
          </div>
          <div class="form-group">
            <label for="imagen">* Imagen:</label>
            <input type="text" name="imagen" class="form-control" id="imagen">
          </div>
          <div class="form-group">
            <label for="clasificacion">* Clasificación (1-Bastones, 2-Pelotas, 3-Guantes):</label>
            <input type="number" name="clasificacion" class="form-control" id="clasificacion">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
          <a href="modificarproducto.php"><button type="button" class="btn btn-default">Modificar Producto</button></a>
        </form>
      </div>
    </div>
  </div>
  </body>
  </html>
