<?php
//1. Invocar conexión
include_once("Conexion.php");
//2. Crear conexión a la Base de Datos
$con=mysqli_connect($host, $usuario, $clave, $bd) or die('Falló la conexion');
mysqli_set_charset($con,"utf8");
//3. Tomar los datos provenientes de los campos del Formulario

$vnom = trim($_POST['nombre']);
$vdes= trim($_POST['descripcion']);
$vdatos = trim($_POST['datos_id']);
$vperfil = trim($_POST['perfiles_id_perfil']);

//4. Insertar los datos en la tabla de la Base de Datos 
$inserta = "INSERT INTO $bd.estados (nombre, descripcion, datos_id, perfiles_id_perfil) VALUES 
('$vnom','$vdes','$vdatos','$vperfil');";
$resultado = mysqli_query($con,$inserta);
//5. Redirecciona la consulta y muestra los datos que contiene la Base de Datos 
//header("location:resultado.php");
//6. Cerrar la conexion 
 mysqli_close($con);
?>
<Script>
    alert("¡Estado Añadido!");
    window.location.href='Inicio.php'
</Script>