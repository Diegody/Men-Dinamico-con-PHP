<?php
 include_once('Conexion.php');
 $con=mysqli_connect($host,$usuario,$clave,$bd) or die('Fallo la conexion');
 mysqli_set_charset($con,"utf8");
 $id1 = isset($_GET['id_perfil']) ? $_GET['id_perfil'] : '';
if($id1 !=null){
$eliminar ="DELETE FROM $bd.perfiles WHERE id_perfil='$id1'";
 $resultado = mysqli_query($con, $eliminar);

header("location:PerfilesCre.php");
 }
 mysqli_close($con);

 ?>