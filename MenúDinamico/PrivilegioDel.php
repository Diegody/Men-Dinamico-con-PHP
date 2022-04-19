<?php
 include_once('conexion.php');
 $con=mysqli_connect($host,$usuario,$clave,$bd) or die('Fallo la conexion');
 mysqli_set_charset($con,"utf8");
 $id1 = isset($_GET['idgestActividad']) ? $_GET['idgestActividad'] : '';
if($id1 !=null){
$eliminar ="delete from $bd.gestactividad where idgestActividad=$id1";
 $resultado = mysqli_query($con, $eliminar);

header("location:privilegios.php");
 }
 mysqli_close($con);

 ?>