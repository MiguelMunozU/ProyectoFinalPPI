<?php
  session_start();
?>
<!DOCTYPE html>
<?php session_start(); ?>
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
<?php
$con=mysqli_connect("localhost","root","hola","tienda");

    $query2="SELECT producto_idproducto FROM carrito;";
    $result2=mysqli_query($con,$query2);
    while($row = mysqli_fetch_array($result2)){
      $idproducto=$row['producto_idproducto'];
      $query3="INSERT INTO historial (producto_idproducto) VALUES('$idproducto');";
      $result=mysqli_query($con,$query3);
    }

  $id=$_SESSION['id'];
  $query="DELETE FROM carrito WHERE usuario_idusuario='$id';";
  $result=mysqli_query($con,$query);
?>
  <div class="container">
    <div class="jumbotron">
      <h2>Artículo comprado con éxito. Se está procesando su pedido y le llegará de 2-4 días hábiles.</h2>
    </div>
  </div>

  </body>
  </html>
