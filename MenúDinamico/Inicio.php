<?php
include_once('Conexion.php');

$con = mysqli_connect($host, $usuario, $clave, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

session_start();
if (isset($_SESSION['clave'])) {
  $clave_ses = $_SESSION['clave'];

  echo "";
} else {
  header("Location: ./");
  exit();
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Inicio Hospital</title>
  <!-- <link rel="stylesheet" type="text/css" href="css/estiloss.css"> -->
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
  <style type="text/css">

  </style>
</head>

<body background="https://fondosmil.com/fondo/23229.jpg"></body>
<!--   -->

<body>
  <!-- Consulta que permite seleccionar Los Nombres y Apellidos del Cliente -->
  <?php

  $consulta = "SELECT $bd.datos.nombre AS nombre, $bd.actividades.nom_actividad AS actividad, $bd.actividades.id_actividad AS idAct, $bd.actividades.enlace AS enlace FROM $bd.datos,$bd.actividades, $bd.gestActividad, $bd.perfiles WHERE $bd.perfiles.id_perfil = $bd.gestActividad.id_perfil AND $bd.gestActividad.id_actividad = $bd.actividades.id_actividad AND $bd.datos.id_perfil = $bd.perfiles.id_perfil AND $bd.datos.clave = '$clave_ses'";
  $resultado = mysqli_query($con, $consulta) or die("Error de conexión");

  ?>
  <!-- Consulta que permite seleccionar Los Datos de la venta -->






  <div class="capa"></div>
  <center>
    <div id="Layer2">
      <table class="table-bordered">
        <tr>
          <h1>Menú Principal</h1>
        </tr>
        <?php
        while ($fila = mysqli_fetch_array($resultado)) {
        ?>
          <tr>
            <td class="text-center"><?php echo '<a href="' . $fila['enlace'] . '?id=' . $fila['idAct'] . '" target="navegacion">' . $fila['actividad'] . '</a>'; ?></td>
            <?php $nom = $fila['nombre']; ?>
          </tr>
        <?php
        }
        $nom_usu = $nom;
        mysqli_close($con);
        ?>
        <div id="Layer3">
          <tr>
            <td>
          <tr>
            <td width="536">
              <h2>Usuario: <?php echo $nom_usu ?></h2>
            </td><br>
            <td class="text" width="77"><a href="Cerrar.php" target="principal"><input type="button" id="button" value="   Salir   " /></a><br><br></td>
          </tr>
          </td>
          </tr>
        </div>
      </table>
    </div>
  </center>
  <br>

<center>
  <div id="Layer4">
    <iframe width="1500px" height="600px" frameborder="5" scrolling="no" name="navegacion"></iframe>
  </div>
  </center>
</body>

</html>