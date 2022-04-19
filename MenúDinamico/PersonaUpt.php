<?php
include_once('Conexion.php');
$con = mysqli_connect($host, $usuario, $clave, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

$id = $_GET['id'];

$consulta = "SELECT * FROM $bd.datos WHERE id='$id'";
$query = mysqli_query($con, $consulta);

$fila = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html>

<head>
  <title>Modificar Datos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylesheet" type="text/css" href="css/nuevoEstilo.css"> -->
  <!-- <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> -->
  <title>Formulario</title>
</head>

<body background="https://static.vecteezy.com/system/resources/previews/003/050/957/large_2x/abstract-design-background-with-blue-and-purple-gradient-free-vector.jpg"></body>

<body>
  <center>
    <form action="#" method="POST" class="envio"> 
      <section class="form-register">
        <h1>Actualizar Datos</h1>
        <p></p>

        <input class="controls" type="text" name="id" id="id" placeholder="Código" required>

        <input class="controls" type="hidden" name="id" placeholder="Código" required><br><br>
        <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre"><br><br>
        <input class="controls" type="text" name="usuario" id="usuario" placeholder="Usuario"><br><br>
        <input class="controls" type="password" name="clave" id="clave" placeholder="Contraseña"><br><br>
        <input class="botons" type="submit" value="Actualizar"><br>
        <b>
          <br><a href="Inicio.php" target="principal"><input type="button" id="button" value="Regresar" /></a><br>
        </b>
      </section>
    </form>
  </center>
</body>
</html>