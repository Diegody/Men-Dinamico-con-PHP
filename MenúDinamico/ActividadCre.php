<?php
//1. Invocar conexión
include_once("Conexion.php");
//2. Crear conexión a la Base de Datos
$con=mysqli_connect($host, $usuario, $clave, $bd) or die('Falló la conexion');
mysqli_set_charset($con,"utf8");
//3. Tomar los datos provenientes de los campos del Formulario

$vid = trim($_POST['id_actividad']);
$vactividad = trim($_POST['nom_actividad']);
$venlace = trim($_POST['enlace']);

//4. Insertar los datos en la tabla de la Base de Datos 
$inserta = "INSERT INTO $bd.actividades (id_actividad, nom_actividad, enlace) VALUES 
('$vid','$vactividad','$venlace');";
$resultado = mysqli_query($con,$inserta);
//5. Redirecciona la consulta y muestra los datos que contiene la Base de Datos 
//header("location:resultado.php");
//6. Cerrar la conexion 
 mysqli_close($con);
?>
<Script>
    alert("¡Actividad Añadida!");
    window.location.href='javascript: history.go(-1)'
</Script>