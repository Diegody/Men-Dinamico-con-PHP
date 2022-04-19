<?php
 include_once('Conexion.php');
 $con=mysqli_connect($host,$usuario,$clave,$bd) or die('Fallo la conexion');
 mysqli_set_charset($con,"utf8");
 $id1 = isset($_GET['id_actividad']) ? $_GET['id_actividad'] : '';
if($id1 !=null){
$eliminar ="DELETE FROM $bd.actividades WHERE id_actividad='$id1'";
 $resultado = mysqli_query($con, $eliminar);

header("location:ActividadGes.php");
 }
 mysqli_close($con);

 ?>