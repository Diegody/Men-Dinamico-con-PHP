<?php
 include_once('Conexion.php');
 $con=mysqli_connect($host,$usuario,$clave,$bd) or die('Fallo la conexion');
 mysqli_set_charset($con,"utf8");
 $id1 = isset($_GET['nombre']) ? $_GET['nombre'] : '';
if($id1 !=null){
$eliminar ="DELETE FROM $bd.estados WHERE nombre='$id1'";
 $resultado = mysqli_query($con, $eliminar);

header("location:UserRea.php");
 }
 mysqli_close($con);

 ?>