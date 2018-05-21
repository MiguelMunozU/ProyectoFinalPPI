<?php
session_start();
  $con=mysqli_connect("localhost","root","hola","tienda");

  if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

  $nombre=mysqli_real_escape_string($con, $_POST['nombre']);
  $email=mysqli_real_escape_string($con, $_POST['email']);
  $pwd=mysqli_real_escape_string($con, $_POST['pwd']);
  $nacimiento=mysqli_real_escape_string($con, $_POST['nacimiento']);
  $tarjeta=mysqli_real_escape_string($con, $_POST['tarjeta']);
  $direccion=mysqli_real_escape_string($con, $_POST['direccion']);
  $root=mysqli_real_escape_string($con, $_POST['root']);

  $query="INSERT INTO usuario (nombre, correo, password, nacimiento, tarjeta, direccion, root)
          VALUES ('$nombre', '$email', '$pwd', '$nacimiento', '$tarjeta', '$direccion', '$root');";

        mysqli_query($con,$query)

  $query2="SELECT * FROM usuario WHERE mail='$email';";
        $res=mysqli_query($con,$query2)
        while($row = mysqli_fetch_array($res)) {
          $_SESSION['id']=$row['idusuario'];
          $_SESSION['nombre']=$row['nombre'];
          $_SESSION['root']=$row['root'];
        }



  mysqli_close($con);
  header("Location: index.php");
  exit;
?>
